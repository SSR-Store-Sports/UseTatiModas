<div id="modal-confirm-delete" class="hidden fixed inset-0 flex items-center justify-center backdrop-blur-sm bg-black/30 z-50 p-4">
    <div class="bg-white rounded-xl shadow-xl w-full max-w-md p-6 flex flex-col gap-4">
        <div class="flex items-start gap-4">
            <div class="p-2 bg-red-100 rounded-full shrink-0">
                <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-red-600" />
            </div>
            <div class="flex flex-col gap-1">
                <h2 class="text-sm font-semibold text-gray-900">Confirmar exclusão</h2>
                <p class="text-sm text-gray-500" id="modal-confirm-message">Tem certeza que deseja excluir este item? Esta ação não pode ser desfeita.</p>
            </div>
            <button type="button" onclick="document.getElementById('modal-confirm-delete').classList.add('hidden')"
                class="ml-auto shrink-0 rounded-md p-1 text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
                <x-heroicon-o-x-mark class="w-4 h-4" />
            </button>
        </div>
        <div class="h-px bg-gray-100"></div>
        <div class="flex gap-3 justify-end">
            <button type="button" onclick="document.getElementById('modal-confirm-delete').classList.add('hidden')"
                class="px-4 py-2 bg-white text-gray-700 rounded-md border border-gray-200 hover:bg-gray-50 transition-colors text-sm font-medium">
                Cancelar
            </button>
            <button type="button" onclick="submitDeleteForm()"
                class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors text-sm font-medium">
                Excluir
            </button>
        </div>
    </div>
</div>

<script>
    let _deleteForm = null;

    function confirmDelete(formId, message) {
        _deleteForm = document.getElementById(formId);
        if (message) document.getElementById('modal-confirm-message').textContent = message;
        document.getElementById('modal-confirm-delete').classList.remove('hidden');
    }

    function submitDeleteForm() {
        if (_deleteForm) _deleteForm.submit();
    }
</script>
