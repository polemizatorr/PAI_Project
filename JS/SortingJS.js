    function getSortedUsers() {
        const apiUrl = "http://localhost:8080";
        const $list = $('.users-list');
        $.ajax({
            url : apiUrl + '/?page=admin_users_sorted',
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
                         <td><button class="btn btn-danger" type="button" onclick="deleteUser('${el.Username}')"><i class="material-icons">Delete User</i></button></td>
                         </tr>`);

                })
            });

    }


    function getRoleSortedUsers() {
        const apiUrl = "http://localhost:8080";
        const $list = $('.users-list');
        $.ajax({
            url : apiUrl + '/?page=admin_users_sorted_role',
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
                         <td><button class="btn btn-danger" type="button" onclick="deleteUser('${el.Username}')"><i class="material-icons">Delete User</i></button></td>
                         </tr>`);

                })
            });

    }

    function getEmailSortedUsers() {
        const apiUrl = "http://localhost:8080";
        const $list = $('.users-list');
        $.ajax({
            url : apiUrl + '/?page=admin_users_sorted_email',
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
                         <td><button class="btn btn-danger" type="button" onclick="deleteUser('${el.Username}')"><i class="material-icons">Delete User</i></button></td>
                         </tr>`);

                })
            });

    }