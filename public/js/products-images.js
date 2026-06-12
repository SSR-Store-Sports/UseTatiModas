document.addEventListener("DOMContentLoaded", () => {
    const input   = document.querySelector("#images");
    const preview = document.querySelector("#preview-images");
    const selectedFiles = [];

    if (!input || !preview) return;

    const renderPreview = () => {
        preview.innerHTML = "";

        selectedFiles.forEach((file, index) => {
            const wrapper = document.createElement("div");
            wrapper.className = "relative group";

            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.alt = file.name;
            img.className = "w-full h-24 object-cover rounded-md border border-gray-200";

            const btn = document.createElement("button");
            btn.type = "button";
            btn.className = "absolute top-1 right-1 w-5 h-5 bg-red-500 text-white rounded-full text-xs flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity";
            btn.innerHTML = "×";
            btn.onclick = () => {
                selectedFiles.splice(index, 1);
                updateInputFiles();
                renderPreview();
            };

            wrapper.appendChild(img);
            wrapper.appendChild(btn);
            preview.appendChild(wrapper);
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
