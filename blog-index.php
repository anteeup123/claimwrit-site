<?php
$pageTitle = "ClaimWrit Blog";
$currentPage = 'blog';
require_once __DIR__ . '/../header.php';
?>

<main class="blog-page">
    <section class="page-hero" style="background-color: var(--pastel-lavender);">
        <h1>ClaimWrit Blog</h1>
        <p>Insights on demand packages, settlement strategies, and legal documentation</p>
    </section>

    <section class="blog-container">
        <div class="blog-main">
            <h2>Latest Articles</h2>
            
            <article class="blog-post featured">
                <div class="post-image">
                    <img src="/images/blog/medical-chronology.jpg" alt="Medical chronology example">
                </div>
                <div class="post-content">
                    <div class="post-meta">
                        <span class="post-category">Documentation Tips</span>
                        <span class="post-date">June 15, 2023</span>
                    </div>
                    <h3><a href="/blog/effective-medical-chronologies">Creating Effective Medical Chronologies for Demand Packages</a></h3>
                    <p class="post-excerpt">Learn how to transform disjointed medical records into a compelling timeline that strengthens your demand package and increases settlement value.</p>
                    <a href="/blog/effective-medical-chronologies" class="read-more">Continue Reading →</a>
                </div>
            </article>
            
            <div class="blog-grid">
                <article class="blog-post">
                    <div class="post-image">
                        <img src="/images/blog/demand-letter.jpg" alt="Demand letter example">
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-category">Settlement Strategy</span>
                            <span class="post-date">May 28, 2023</span>
                        </div>
                        <h4><a href="/blog/demand-letter-structure">The Anatomy of a High-Impact Demand Letter</a></h4>
                        <p class="post-excerpt">Key components that make demand letters more persuasive and likely to result in better settlement offers.</p>
                    </div>
                </article>
                
                <!-- Additional blog posts -->
            </div>
            
            <div class="pagination">
                <a href="#" class="page-numbers prev">Previous</a>
                <a href="#" class="page-numbers current">1</a>
                <a href="#" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers next">Next</a>
            </div>
        </div>
        
        <aside class="blog-sidebar">
            <div class="sidebar-widget">
                <h3>Categories</h3>
                <ul class="category-list">
                    <li><a href="/blog/category/documentation">Documentation Tips</a></li>
                    <li><a href="/blog/category/strategy">Settlement Strategy</a></li>
                    <li><a href="/blog/category/legal-updates">Legal Updates</a></li>
                    <li><a href="/blog/category/case-studies">Case Studies</a></li>
                </ul>
            </div>
            
            <div class="sidebar-widget">
                <h3>Popular Posts</h3>
                <ul class="popular-posts">
                    <li>
                        <a href="/blog/maximizing-settlement-value">5 Ways to Maximize Settlement Value Through Documentation</a>
                        <span class="post-date">April 12, 2023</span>
                    </li>
                    <li>
                        <a href="/blog/common-mistakes">Common Mistakes in Demand Packages (And How to Avoid Them)</a>
                        <span class="post-date">March 5, 2023</span>
                    </li>
                </ul>
            </div>
            
            <div class="sidebar-widget newsletter-widget">
                <h3>Subscribe to Our Newsletter</h3>
                <p>Get the latest tips and updates delivered to your inbox</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit" class="subscribe-button">Subscribe</button>
                </form>
            </div>
        </aside>
    </section>
</main>

<?php require_once __DIR__ . '/../footer.php'; ?>