
    document.addEventListener("click", function (e) {
        const searchInput = document.querySelector("input[placeholder='Search...']");
        const panel = document.getElementById("contact-panel");

        // Jika klik di luar input dan panel, sembunyikan panel
        if (!searchInput.contains(e.target) && !panel.contains(e.target)) {
            panel.classList.add("hidden");
        }
    });
