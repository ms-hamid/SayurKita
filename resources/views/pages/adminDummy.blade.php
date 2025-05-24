{{-- JavaScript untuk handling modal dan AJAX --}}
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle edit button click
    document.querySelectorAll('.edit-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            const modal = document.getElementById('edit-product-modal');
            const form = modal.querySelector('form');
            
            // Update form action
            const actionUrl = form.getAttribute('action').replace(':id', productId);
            form.setAttribute('action', actionUrl);
            
            // Fetch product data
            fetch(`{{ route('admin.products.getProduct', ':id') }}`.replace(':id', productId))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const product = data.data;
                        
                        // Populate form fields
                        modal.querySelector('input[name="name"]').value = product.name || '';
                        modal.querySelector('textarea[name="description"]').value = product.description || '';
                        modal.querySelector('select[name="category_id"]').value = product.category_id || '';
                        
                        // Show current image if exists
                        const imagePreview = modal.querySelector('#image-preview');
                        if (product.image_path && imagePreview) {
                            imagePreview.src = `/storage/${product.image_path}`;
                            imagePreview.style.display = 'block';
                        }
                    }
                })
                .catch(error => {
                    console.error('Error fetching product data:', error);
                    alert('Terjadi kesalahan saat mengambil data product');
                });
        });
    });

    // Handle delete button click
    document.querySelectorAll('.delete-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            const productName = this.getAttribute('data-name');
            
            if (confirm(`Apakah Anda yakin ingin menghapus product "${productName}"?`)) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `{{ route('admin.products.destroy', ':id') }}`.replace(':id', productId);
                
                // Add CSRF token
                const csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                form.appendChild(csrfToken);
                
                // Add method spoofing for DELETE
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);
                
                document.body.appendChild(form);
                form.submit();
            }
        });
    });

    // Preview image before upload
    document.querySelectorAll('input[type="file"]').forEach(function(input) {
        input.addEventListener('change', function() {
            const file = this.files[0];
            const previewId = this.getAttribute('data-preview');
            
            if (file && previewId) {
                const preview = document.getElementById(previewId);
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                
                reader.readAsDataURL(file);
            }
        });
    });
});
</script>
@endpush