<?php
$pageTitle = "Client Document Upload";
$currentPage = 'client';
require_once __DIR__ . '/header.php';
?>

<main class="upload-container">
    <h1>Client Document Upload</h1>
    <p class="intro-text">Please use this portal to submit your documents for review. Refer to the checklist below to ensure you've included all necessary materials.</p>
    
    <div class="checklist-container">
        <h2>Demand Package Submission Checklist</h2>
        
        <?php
        // Checklist data organized by sections
        $checklistSections = [
            'Incident & Liability Information' => [
                'Client intake sheet detailing how, when, and where the injury occurred',
                'Copies of all police, incident, or accident reports (with report numbers)',
                'Photographs or video of the scene, property damage, and visible injuries (if available)',
                'Names, contact information, and insurance details for all involved parties and witnesses'
            ],
            'Medical Records & Treatment Summaries' => [
                'All emergency room and hospital records from the date of accident forward',
                'Clinic or physician office visit notes and summaries for every provider seen',
                'Imaging reports (MRI, CT, X-ray) and corresponding radiology interpretations',
                'Physical therapy, chiropractic, pain-management, and other therapy records',
                'Detailed billing statements or itemized invoices for each provider',
                'Prescriptions with dosages and accompanying pharmacy receipts',
                'Any impairment ratings, specialist evaluations, or future care recommendations'
            ],
            'Financial & Employment Documentation' => [
                'Pay stubs or employer verification showing lost wages',
                'Tax returns or profit-and-loss statements if self-employed',
                'Receipts for out-of-pocket expenses',
                'Documentation of property damage expenses'
            ],
            'Insurance & Claim Forms' => [
                'Copies of all insurance correspondence',
                'Insurance policy declarations pages',
                'At-fault party insurance declarations',
                'Signed medical record authorizations and HIPAA release forms',
                'Any signed lien or subrogation reimbursement forms'
            ]
        ];
        
        // Generate checklist sections
        foreach ($checklistSections as $sectionTitle => $items) {
            echo '<div class="checklist-section">';
            echo '<h3>' . htmlspecialchars($sectionTitle) . '</h3>';
            echo '<ul class="checklist-items">';
            
            foreach ($items as $index => $item) {
                $id = 'item-' . preg_replace('/[^a-z0-9]/', '-', strtolower($sectionTitle)) . '-' . $index;
                echo '<li>';
                echo '<input type="checkbox" id="' . $id . '">';
                echo '<label for="' . $id . '">' . htmlspecialchars($item) . '</label>';
                echo '</li>';
            }
            
            echo '</ul></div>';
        }
        ?>
        
        <div class="upload-area">
            <h3>Upload Your Documents</h3>
            <form action="/includes/upload-handler.php" method="post" enctype="multipart/form-data" class="upload-form">
                <div class="file-drop-zone" id="dropZone">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>Drag and drop files here or click to browse</p>
                    <input type="file" id="fileInput" name="files[]" multiple>
                </div>
                <div class="form-group">
                    <label for="client-name">Your Name</label>
                    <input type="text" id="client-name" name="client_name" required>
                </div>
                <div class="form-group">
                    <label for="case-number">Case Number (if applicable)</label>
                    <input type="text" id="case-number" name="case_number">
                </div>
                <div class="form-group">
                    <label for="notes">Additional Notes</label>
                    <textarea id="notes" name="notes" rows="3"></textarea>
                </div>
                <div class="file-preview" id="filePreview"></div>
                <button type="submit" class="submit-button">Submit Documents</button>
            </form>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>