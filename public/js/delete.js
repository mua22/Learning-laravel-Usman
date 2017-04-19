/**
 * Created by _ paRaDox _ on 4/19/2017.
 */

$('.delete-form').submit(function (event) {

    if (confirm('Are you sure you want to delete this product?')) {
        return true;
    } else {
        return false;
    }


});
