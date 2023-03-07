<?php
if ($this->session->userdata('event-added') == 1) {
?>
   <script>
      const Toast = Swal.mixin({
         toast: true,
         position: 'top-end',
         showConfirmButton: false,
         timer: 3000,
         timerProgressBar: true,
         didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
         }
      });
      Toast.fire({
         icon: 'success',
         title: 'Data has been added successfully'
      });
   </script>
<?php
   $this->session->unset_userdata('event-added');
}
?>