<?php
$pageTitle = "Our Mission";
$currentPage = 'mission';
require_once __DIR__ . '/header.php';
?>

<main class="mission-page">
    <section class="page-hero" style="background-color: var(--pastel-pink);">
        <h1>Our Mission & Values</h1>
        <p>Guiding principles that define our approach to legal documentation</p>
    </section>

    <section class="mission-content">
        <div class="mission-statement">
            <h2>Our Commitment</h2>
            <p>At ClaimWrit, we believe that well-structured legal documentation should be accessible, precise, and effective. Our mission is to transform complex claim processes into clear, compelling demand packages that maximize settlement potential while reducing stress for our clients.</p>
            
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-binoculars"></i>
                    <h3>Clarity</h3>
                    <p>We bring transparency to the claims process, ensuring you understand every step</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-sitemap"></i>
                    <h3>Structure</h3>
                    <p>Meticulous organization that strengthens your case presentation</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Resolution</h3>
                    <p>Focused on achieving optimal outcomes through persuasive documentation</p>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h2>Our Approach</h2>
            <p>Founded in Fort Lauderdale, our team combines legal expertise with technical precision to create demand packages that insurance companies and opposing counsel take seriously. We bridge the gap between medical documentation and legal argumentation, presenting your case in the most compelling light possible.</p>
            
            <div class="approach-list">
                <div class="approach-item">
                    <div class="approach-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="approach-text">
                        <h3>Comprehensive Review</h3>
                        <p>We meticulously analyze every medical record, police report, and supporting document to identify all viable claims.</p>
                    </div>
                </div>
                <div class="approach-item">
                    <div class="approach-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div class="approach-text">
                        <h3>Damage Analysis</h3>
                        <p>Our proprietary methods calculate both economic and non-economic damages to ensure nothing is overlooked.</p>
                    </div>
                </div>
                <div class="approach-item">
                    <div class="approach-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <div class="approach-text">
                        <h3>Legal Precision</h3>
                        <p>Every demand letter is crafted to meet jurisdictional requirements while maintaining persuasive impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section" style="background-color: var(--pastel-green);">
        <h2>Ready to Strengthen Your Claim?</h2>
        <p>Discover how our meticulous approach can benefit your case</p>
        <div class="cta-buttons">
            <a href="/services.php" class="cta-button">Our Services</a>
            <a href="/contact.php" class="cta-button secondary">Contact Us</a>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>