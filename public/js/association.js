
function afficheDetail(){
    $('#detailMembre').modal('show');
}
$('form.membreDelete').submit(
    function (event) {
        event.preventDefault();
        event.stopPropagation();
        const swalWithBootstrapButtons = Swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: 'Êtes-vous sûr ?',
            text: "Vous ne serez pas en mesure de récupérer cet membre!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirmer',
            cancelButtonText: 'Annuler',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                this.submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Annulé',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
);

