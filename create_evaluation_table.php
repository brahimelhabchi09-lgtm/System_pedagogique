<?php
require_once __DIR__ . '/public/index.php'; // Load autoloader/config if needed, or just require Database
require_once __DIR__ . '/core/Database/Database.php';

use Core\Database\Database;

try {
  $sql = "
    CREATE TABLE IF NOT EXISTS evaluation (
        id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
        student_id UUID REFERENCES students(id) ON DELETE CASCADE,
        skill_id UUID REFERENCES skill(id) ON DELETE CASCADE,
        level level_enum,
        comment TEXT,
        created_at TIMESTAMP DEFAULT now(),
        updated_at TIMESTAMP
    );
    ";

  $pdo = Database::getConnection();
  $pdo->exec($sql);
  echo "Evaluation table created successfully.";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}
