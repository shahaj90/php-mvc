function readBuyer() {
    $('#buyerTable').DataTable();
    // $('#buyerTable').DataTable({
    //     // processing: true,
    //     // serverSide: true,
    //     // responsive: true,
    //     // select: true,
    //     // "order": [
    //     //     [0, "desc"]
    //     // ],
    //     "ajax": {
    //         url: baseUrl + "Email/ReadConfig",
    //         type: 'POST'
    //     },
    //     "columns": [

    //         {
    //             "data": "id",
    //             "render": function(data, type, row, meta) {
    //                 return meta.row + meta.settings._iDisplayStart + 1;
    //             }
    //         },
    //         { "data": "email" },
    //         // { "data": "password" },
    //         // { "data": "incoming_server" },
    //         // { "data": "incoming_port" },
    //         { "data": "outgoing_server" },
    //         { "data": "outgoing_port" },
    //         {
    //             "data": "status",
    //             "render": function(data, type, row, meta) {
    //                 var response = 'Inactive';
    //                 if (data == 1) {
    //                     response = 'Active';
    //                 }

    //                 return response;
    //             }
    //         },
    //         { "data": "sender_name" },
    //         { "data": "encryption" },
    //         { "data": "created_at" },
    //         {
    //             "data": "status",
    //             "render": function(data, type, row, meta) {
    //                 var buttons = `<div class="btn-group m-btn-group" role="group">
    //                 <button type="button" class="btn btn-success btn-sm" onclick='sendConfigTestEmail(` + JSON.stringify(row) + `)'>Test Send</button>
    //                 <button type="button" class="btn btn-warning btn-sm" onclick='updateModal(` + row.id + `)'>Update</button>
    //                 <button type="button" class="btn btn-danger btn-sm" onclick='deleteConfig(` + row.id + `)'>Delete</button>
    //                 </div>`;

    //                 return buttons;
    //             }
    //         },
    //     ],
    // });

}