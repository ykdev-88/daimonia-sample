<?php

declare(strict_types=1);

$basePath = '';
$currentPage = 'home';
$currentNav = 'home';

require __DIR__ . '/includes/bootstrap.php';

$extraHead = <<<'HTML'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "ゆうダイモニア",
  "url": "https://yu-daimonia.com/",
  "logo": "https://yu-daimonia.com/assets/images/logo.png",
  "description": "名古屋・岐阜の健康サロン。健康パッケージ・よもぎ蒸し・レンタルスペースを提供しています。"
}
</script>
HTML;

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

    <section class="home-hero home-hero--brand">
      <div class="home-hero__bg home-hero__bg--brand" aria-hidden="true">
        <video class="home-hero__video" autoplay muted loop playsinline preload="metadata">
          <source src="<?php echo asset('videos/home-hero-keyvisual.mp4'); ?>" type="video/mp4">
        </video>
      </div>
      <img class="decoration-leaf home-hero__leaf home-hero__leaf--left" src="<?php echo asset('svg/leaf-deco-01.svg'); ?>" alt="" aria-hidden="true">
      <img class="decoration-leaf home-hero__leaf home-hero__leaf--right" src="<?php echo asset('svg/leaf-deco-02.svg'); ?>" alt="" aria-hidden="true">
      <div class="home-hero__inner">
        <div class="home-hero__content home-hero__content--intro">
          <p class="home-eyebrow home-hero__intro-item">Yu Daimonia</p>
          <h1 class="home-hero__title home-hero__intro-item">
            <span class="home-hero__title-line">人間が本来あるべき形で、</span><br>
            <span class="home-hero__title-line">健康を目指す。</span>
          </h1>
          <p class="home-hero__lead home-hero__intro-item">自然派のコンセプトのもと、健康パッケージ・<span class="phrase-keep">よもぎ蒸し</span>・レンタルスペースを通じて、<br>あなたらしい毎日を支えます。</p>
        </div>
      </div>
      <div class="wave-divider" aria-hidden="true">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
          <path d="M0,38 C240,76 480,10 720,42 C960,76 1200,6 1440,38 L1440,80 L0,80 Z"/>
        </svg>
      </div>
    </section>

    <section class="brand-about section" data-animate="fade-up">
      <div class="container brand-about__grid">
        <div class="brand-about__text">
          <p class="home-eyebrow">ABOUT</p>
          <h2>理念・概要</h2>
          <p>ゆうダイモニアは、健康に関するニーズに多角的に応えるブランドです。「ダイモニア（幸福）」の名のもと、身体・心・生活のバランスを整え、人が本来持っている健やかさを取り戻すお手伝いをします。</p>
          <p>覚王山店・岐阜店・名古屋西店の3店舗で、それぞれの地域に合わせたサービスを提供しています。</p>
        </div>
        <div class="brand-about__visual">
          <img src="<?php echo asset('images/brand-story.jpg'); ?>" alt="ゆうダイモニアの理念をイメージした写真" width="768" height="512" loading="lazy">
        </div>
      </div>
    </section>

    <section class="brand-service section brand-service--health section--soft" data-animate="fade-up">
      <div class="container brand-service-health">
        <header class="brand-service-health__head">
          <p class="home-eyebrow">CORE SERVICE</p>
          <h2>健康パッケージ</h2>
        </header>
        <figure class="brand-service-health__media">
          <img src="<?php echo asset('images/health-package-main.png'); ?>" alt="ゆうダイモニアの健康パッケージ。サプリメントや温活用品を添えたギフトバッグ" width="1024" height="682" loading="lazy">
        </figure>
        <p class="brand-service-health__lead">健康コンサルティングと<span class="phrase-keep">よもぎ蒸し</span>等を組み合わせた、ゆうダイモニアの中核事業です。</p>
        <div class="brand-feature-grid brand-feature-grid--health">
          <article class="feature-card">
            <div class="feature-card__icon" aria-hidden="true">◎</div>
            <h3 class="feature-card__title">パーソナルな健康設計</h3>
            <p class="feature-card__text">体質や生活習慣に合わせたプログラムをご提案します。</p>
          </article>
          <article class="feature-card">
            <div class="feature-card__icon" aria-hidden="true">♨</div>
            <h3 class="feature-card__title">温活と分析の融合</h3>
            <p class="feature-card__text"><span class="phrase-keep">よもぎ蒸し</span>や機器分析など、多角的なアプローチでサポートします。</p>
          </article>
          <article class="feature-card">
            <div class="feature-card__icon" aria-hidden="true">♡</div>
            <h3 class="feature-card__title">継続的な伴走</h3>
            <p class="feature-card__text">一時的なケアではなく、日常に取り入れやすい健康習慣を目指します。</p>
          </article>
        </div>
        <p class="brand-service__action">
          <a href="<?php echo page_url('/health-package/'); ?>" class="btn btn--primary">詳しく見る</a>
        </p>
      </div>
    </section>

    <section class="brand-service section brand-service--split" data-animate="split">
      <div class="container brand-service-split">
        <div class="brand-service-split__media">
          <img src="<?php echo asset('images/kanpou-steam-main.jpg'); ?>" alt="よもぎ蒸しの蒸気が立ちのぼる写真" width="640" height="480" loading="lazy">
        </div>
        <div class="brand-service-split__body">
          <p class="home-eyebrow">YOMOGI</p>
          <h2><span class="phrase-keep">よもぎ蒸し</span></h2>
          <p>名古屋西店で提供する温活サービス。よもぎの蒸気で内側からじんわり温め、リラックスとめぐりのよい毎日をサポートします。</p>
          <a href="<?php echo page_url('/yomogi/'); ?>" class="btn btn--ghost">料金・予約・詳細を見る</a>
        </div>
      </div>
    </section>

    <section class="brand-service section brand-service--split brand-service--split-reverse" data-animate="split">
      <div class="container brand-service-split">
        <div class="brand-service-split__media">
          <img src="<?php echo asset('images/room01.jpg'); ?>" alt="セミナールームの室内写真" width="640" height="480" loading="lazy">
        </div>
        <div class="brand-service-split__body">
          <p class="home-eyebrow">RENTAL SPACE</p>
          <h2>レンタルスペースゆう</h2>
          <p>名古屋西店のセミナールーム。講座・研修・ワークショップ・打ち合わせなど、多目的にご利用いただける空間です。</p>
          <a href="<?php echo page_url('/rental-space/'); ?>" class="btn btn--ghost">料金・予約・詳細を見る</a>
        </div>
      </div>
    </section>

    <?php require __DIR__ . '/includes/home-salon-section.php'; ?>

<?php
require __DIR__ . '/includes/cta-contact.php';
require __DIR__ . '/includes/footer.php';
