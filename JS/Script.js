    function getUserss() {
    const apiUrl = "http://localhost:8080";
    const $list = $('.users-list');
    $.ajax({
        url : apiUrl + '/?page=admin_users',
        dataType : 'json',
        method: "get"
    })
        .done((res) => {
            $list.empty();
            //robimy pętlę po zwróconej kolekcji
            //dołączając do tabeli kolejne wiersze
            res.forEach(el => {
                $list.append(`<tr>
                         <td>${el.id}</td>
                         <td>${el.surname}</td>
                         <td>${el.email}</td>
                         <td>${el.role}</td>
                         <td>${el.role}</td>
                         </tr>`);
            })
        });
}