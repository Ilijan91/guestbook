$(document).ready(function(){

    $('#formId').on('click', function() {
        var errors = [];
        var html = '<ul>' ;
        valid = true;
        $('#errors').empty();
        if ($('#user_name').val() == '') {
            errors.push('<li>Please enter  name</li>');
            valid = false;
        }
        if ($('#title').val() == '') {
            errors.push('<li>Please insert title </li>');
             valid = false;
        }
        if ($('#comment').val() == '') {
            errors.push('<li>Please leave a comment </li>');
             valid = false;
        }

        if (!valid) {
            html += errors.join('') + '</ul>' 
                $('#errors').append(html);
            
        }
        else{
            $('#errors').hide();
        }
        return valid;
    });


        
    





});