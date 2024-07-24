
const deleteForms = document.querySelectorAll('form.delete-btn');
deleteForms.forEach((deleteFormElement) => {
    deleteFormElement.addEventListener('submit', function( event ){
        event.preventDefault();
        if (window.confirm('Are you sure?') === true){
            this.submit();
        }
    });
})
