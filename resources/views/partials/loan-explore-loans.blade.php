<section class="dds-explore" aria-labelledby="loan-explore-heading">
    <h2 id="loan-explore-heading" class="dds-explore-title">Explore Loans</h2>
    <div class="dds-explore-grid">
        <article class="dds-product-card">
            <div class="dds-product-icon">
                <img src="{{ asset('images/pl.png') }}" alt="" onerror="this.style.display='none';">
            </div>
            <h3 class="dds-product-card-title">Personal Loan</h3>
            <p class="dds-product-card-desc">An unsecured loan that helps individuals meet personal financial needs and is repaid in fixed monthly installments.</p>
            <a href="{{ route('services.personal-loan') }}" class="dds-product-card-link">Explore</a>
        </article>
        <article class="dds-product-card">
            <div class="dds-product-icon">
                <img src="{{ asset('images/hl.png') }}" alt="" onerror="this.style.display='none';">
            </div>
            <h3 class="dds-product-card-title">Home Loan</h3>
            <p class="dds-product-card-desc">A Home Loan helps individuals finance the purchase or construction of a house and repay the amount in monthly installments.</p>
            <a href="{{ route('services.home-loan') }}" class="dds-product-card-link">Explore</a>
        </article>
        <article class="dds-product-card">
            <div class="dds-product-icon">
                <img src="{{ asset('images/al.png') }}" alt="" onerror="this.style.display='none';">
            </div>
            <h3 class="dds-product-card-title">Auto Loan</h3>
            <p class="dds-product-card-desc">An Auto Loan helps individuals finance the purchase of a vehicle and repay the amount in monthly installments over a fixed period.</p>
            <a href="{{ route('services.auto-loan') }}" class="dds-product-card-link">Explore</a>
        </article>
        <article class="dds-product-card">
            <div class="dds-product-icon">
                <img src="{{ asset('images/bl.png') }}" alt="" onerror="this.style.display='none';">
            </div>
            <h3 class="dds-product-card-title">Business Loan</h3>
            <p class="dds-product-card-desc">Money borrowed from a bank or financial institution to start or expand a business, repaid over time with interest.</p>
            <a href="{{ route('services.business-loan') }}" class="dds-product-card-link">Explore</a>
        </article>
    </div>
</section>
