document.addEventListener('DOMContentLoaded', () => {
    
    // FUNGSI PRELOADER DITAMBAHKAN KEMBALI
    const preloader = document.getElementById('preloader');
    if (preloader) {
        // Hapus preloader setelah halaman selesai dimuat sepenuhnya
        window.addEventListener('load', () => {
            preloader.remove();
        });
    }

    const portfolioWrapper = document.getElementById('portfolio-wrapper');
    const detailContent = document.getElementById('detail-content');

    // Cek apakah kita di halaman utama atau halaman detail
    if (portfolioWrapper) {
        loadPortfolio();
    }

    if (detailContent) {
        loadProjectDetails();
    }
});

// Fungsi untuk memuat data proyek dari file JSON
async function fetchProjects() {
    try {
        // PERBAIKAN: Path ini sekarang benar dari lokasi index.html
        const response = await fetch('Assets/Db/projects.json'); 
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return await response.json();
    } catch (error) {
        console.error("Could not fetch projects:", error);
    }
}

// Fungsi untuk membangun carousel di halaman utama
async function loadPortfolio() {
    const projects = await fetchProjects();
    const wrapper = document.getElementById('portfolio-wrapper');
    if (!projects || !wrapper) return;

    wrapper.innerHTML = ''; // Kosongkan wrapper

    projects.forEach(project => {
        // Link menuju detail.html
        const slide = `
            <div class="swiper-slide">
                <div class="portfolio-item">
                    <a href="portoD.html?id=${project.id}">
                        <img src="${project.image}" class="img-fluid portfolio-img" alt="${project.title}">
                        <div class="portfolio-info">
                            <h4>${project.title}</h4>
                            <p>${project.category}</p>
                        </div>
                    </a>
                </div>
            </div>
        `;
        wrapper.innerHTML += slide;
    });

    // Inisialisasi Swiper setelah slide ditambahkan
    new Swiper('.portfolio-swiper', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

// Fungsi untuk membangun halaman detail proyek
async function loadProjectDetails() {
    const projects = await fetchProjects();
    if (!projects) return;

    // Ambil ID dari URL
    const params = new URLSearchParams(window.location.search);
    const projectId = parseInt(params.get('id'));

    // Cari proyek yang cocok
    const project = projects.find(p => p.id === projectId);

    const contentWrapper = document.getElementById('detail-content');
    if (project) {
        document.title = `Portfolio Detail | ${project.title}`; // Update judul halaman
        const content = `
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider">
                        <img src="${project.image}" alt="${project.title}" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project Information</h3>
                        <ul>
                            <li><strong>Category</strong>: ${project.category}</li>
                            <li><strong>Client</strong>: ${project.client}</li>
                            <li><strong>Project date</strong>: ${project.project_date}</li>
                            ${project.project_url !== '#' ? `<li><strong>Project URL</strong>: <a href="${project.project_url}" target="_blank">Visit Site</a></li>` : ''}
                        </ul>
                    </div>
                    <div class="portfolio-description mt-4">
                        <h2>${project.title}</h2>
                        <p>${project.description.replace(/\n/g, '<br>')}</p>
                    </div>
                </div>
            </div>
            <a href="index.html#portfolio" class="back-link mt-4 d-inline-block"><i class="bi bi-arrow-left-circle"></i> Back to Portfolio</a>
        `;
        contentWrapper.innerHTML = content;
    } else {
        contentWrapper.innerHTML = `<p class="text-center">Project not found. <a href="index.html#portfolio">Back to portfolio</a></p>`;
    }
}
