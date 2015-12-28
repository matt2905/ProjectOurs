/**
 * Created by matth on 28/12/2015.
 */
function paginationAjax(destination, route, page)
{
    $.ajax({
        type: 'GET',
        url: route,
        data: 'page='+page,
        dataType: "json",
        success: function(data) {
            destination.html(data.html)
        },
        fail: function(jqXHR, textStatus, errorThrown) {
            alert('Error : ' + errorThrown)
        }
    })
}