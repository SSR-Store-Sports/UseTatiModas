document.addEventListener("DOMContentLoaded", () => {
    const input = document.querySelector("#images");
    const preview = document.querySelector("#preview-images");
    const selectedFiles = [];

    if (!input || !preview) {
        console.error("Input or preview element not found", { input, preview });
        return;
    }

    const renderPreview = () => {
        preview.innerHTML = "";

        selectedFiles.forEach((file) => {
            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.alt = file.name;
            img.classList.add(
                "w-full",
                "h-24",
                "object-cover",
                "rounded-md",
                "border",
                "border-gray-200",
            );
            preview.appendChild(img);
        });
    };

    const updateInputFiles = () => {
        const dataTransfer = new DataTransfer();
        selectedFiles.forEach((file) => dataTransfer.items.add(file));
        input.files = dataTransfer.files;
    };

    input.addEventListener("change", (event) => {
        const newFiles = Array.from(event.target.files);

        if (selectedFiles.length + newFiles.length > 3) {
            alert("Você pode selecionar no máximo 3 imagens.");
            input.value = "";
            return;
        }

        newFiles.forEach((file) => selectedFiles.push(file));
        updateInputFiles();
        renderPreview();
    });
});
