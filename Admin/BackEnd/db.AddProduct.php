<?php
require '../../Db/db.config.php'; // adjust your DB connection path

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // --- Collect Product Data ---
        $productName = $_POST['productName'] ?? '';
        $productDescription = $_POST['productDescription'] ?? '';
        $productType = $_POST['AdminAccess'] ?? 'Other';

        // --- Validate Required Fields ---
        if (empty($productName) || empty($productDescription)) {
            throw new Exception("Product name and description are required.");
        }

        // --- Handle Image Upload ---
        $uploadDir = "../../Images/Products/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $imagePath = null;
        if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['productImage']['tmp_name'];
            $fileName = time() . "_" . basename($_FILES['productImage']['name']);
            $targetPath = $uploadDir . $fileName;

            if (move_uploaded_file($tmpName, $targetPath)) {
                $imagePath = "Images/Products/" . $fileName;
            } else {
                throw new Exception("Failed to upload product image.");
            }
        }

        // --- Insert Product ---
        $stmt = $pdo->prepare("INSERT INTO products (name, description, image, type) VALUES (?, ?, ?, ?)");
        $stmt->execute([$productName, $productDescription, $imagePath, $productType]);
        $productId = $pdo->lastInsertId();

        // --- Insert Benefits & Details ---
        if (isset($_POST['benefits']) && is_array($_POST['benefits'])) {
            foreach ($_POST['benefits'] as $benefit) {
                if (!empty($benefit['title'])) {
                    // Insert benefit
                    $stmt = $pdo->prepare("INSERT INTO benefits (product_id, title) VALUES (?, ?)");
                    $stmt->execute([$productId, $benefit['title']]);
                    $benefitId = $pdo->lastInsertId();

                    // Insert details if exist
                    if (isset($benefit['details']) && is_array($benefit['details'])) {
                        foreach ($benefit['details'] as $detail) {
                            if (!empty(trim($detail))) {
                                $stmt = $pdo->prepare("INSERT INTO benefit_details (benefit_id, detail) VALUES (?, ?)");
                                $stmt->execute([$benefitId, $detail]);
                            }
                        }
                    }
                }
            }
        }

        echo json_encode(["status" => "success", "message" => "Product added successfully!"]);
    } else {
        throw new Exception("Invalid request method.");
    }

} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>
