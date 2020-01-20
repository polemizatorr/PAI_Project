    function getSortedUsers() {
        const apiUrl = "http://localhost:8080";
        const $list = $('.users-list');
        $.ajax({
            url : apiUrl + '/?page=admin_users_sorted',
            dataType : 'json',
        })
            .done((res) => {
                $list.empty();

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
        })
            .done((res) => {
                $list.empty();

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
        })
            .done((res) => {
                $list.empty();

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
    function giveAdmin(Username) {
        if (!confirm('Do you want to give this user Admin permission?')) {
            return;
        }
        const apiUrl = "http://localhost:8080";
        $.ajax({
            url : apiUrl + '/?page=admin_give_admin',
            method : 'POST',
            dataType: 'json',
            data : {
                Username : Username
            }

        })
            .done(
                () => {
                    alert('Selected user has been given Admin permission!');
                }
            );
    }


    function getOnlyUsers() {
        const apiUrl = "http://localhost:8080";
        const $list = $('.users-list');
        $.ajax({
            url : apiUrl + '/?page=admin_users_only',
            dataType : 'json',

        })
            .done((res) => {
                $list.empty();

                res.forEach(el => {
                    $list.append(`<tr>
                         <td>${el.IDUser}</td>
                         <td>${el.Username}</td>
                         <td>${el.Name}</td>
                         <td>${el.Email}</td>
                         <td>${el.Role}</td>
                         <td><button class="btn btn-danger" type="button" onclick="deleteUser('${el.Username}')"><i class="material-icons">Delete User</i></button>
                         <button class="btn btn-success" type="button" onclick="giveAdmin('${el.Username}')"><i class="material-icons">Give Admin</i></button></td>

                         </tr>`);

                })
            });

    }


