@if(Session::has('success'))
    <div id="alert" class="text-green-600 font-bold">
        <button onclick="hideAlert()"></button>
        {{ __('photo.success') }}
    </div>
@endif

<script>
    function hideAlert() {
        document.getElementById("alert").classList.add("d-none");
    }
</script>