    function getUsers() {
    const apiUrl = "http://localhost:8080";
    const $list = $('.users-list');
    $.ajax({
        url : apiUrl + '/?page=admin_users',
        dataType : 'json',
        success: function (res)
             {
             }

    })
        .done((res) => {
            $list.empty();
            //robimy pętlę po zwróconej kolekcji
            //dołączając do tabeli kolejne wiersze
            res.forEach(el => {
                $list.append(`<tr>
                         <td>${el.IDUser}</td>
                         <td>${el.Username}</td>
                         <td>${el.Name}</td>
                         <td>${el.Email}</td>
                         <td>${el.Role}</td>
                         <td><button class="btn btn-danger" type="button" onclick="deleteUser(${el.Username})"><i class="material-icons">Delete User</i></button></td>
                         </tr>`);

            })
        });
}

    function deleteUser(Username) {
        if (!confirm('Do you want to delete this user?')) {
            return;
        }
        const apiUrl = "http://localhost:8080";
        $.ajax({
            url : apiUrl + '/?page=admin_delete_user',
            method : 'POST',
            dataType: 'json',
            data : {
                Username : Username
            },
            success: function() {
                alert('Selected user successfully deleted from database!');
                getUsers();
            }
        });
    }


