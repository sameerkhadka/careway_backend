<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/js/uikit.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.0/js/uikit-icons.min.js"></script>

<script src="{{asset('js/script.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>  
@if(Session::has('success'))  
    toastr.success("{{ Session('success') }}");  
@endif  
</script>
<script>  
@if(Session::has('error'))  
    toastr.error("{{ Session('error') }}");  
@endif  
</script>