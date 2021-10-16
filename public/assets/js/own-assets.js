class PSDataTable {
    /**
     * Instance of PSDataTable
     *
     * @param string title
     * @param array  columns
     * @param string lang
     * @param string datatable
     * @param string buttons
     *
     * @return DataTable
     */
    constructor(title, columns, lang, datatable = '#main-datatable', buttons = false) {
        this.title = title;
        this.columns = columns;
        this.lang = lang;
        this.datatable = datatable;
        this.buttons = buttons;
        this.domJquery;

        this.init();
    }
    init() {
        $(this.datatable).DataTable({
            "dom": 'Bfrtip',
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "language": {
                "url": this.lang
            },
            "buttons": [
                {
                    "extend": "csvHtml5",
                    "title": this.title,
                    "text": '<i class="fas fa-file-csv"></i>',
                    "className": "btn btn-dark",
                    "exportOptions": {
                        "columns": this.columns
                    }
                },
                {
                    "extend": "excelHtml5",
                    "title": this.title,
                    "text": '<i class="fas fa-file-excel"></i>',
                    "className": "btn btn-success",
                    "exportOptions": {
                        "columns": this.columns
                    }
                },
                {
                    "extend": "pdfHtml5",
                    "title": this.title,
                    "text": '<i class="fas fa-file-pdf"></i>',
                    "className": "btn btn-danger",
                    "pageSize": "A4",
                    "exportOptions": {
                        "columns": this.columns
                    },
                    "customize": function (doc) {
                        doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    }
                },
                {
                    "extend": "print",
                    "title": this.title,
                    "text": '<i class="fas fa-print"></i>',
                    "className": "btn btn-info",
                    "exportOptions": {
                        "columns": this.columns
                    },
                }
            ]
        });

        if (this.buttons) {
            console.log(this.buttons);
            $(this.datatable).DataTable().buttons().container().appendTo(this.buttons);
        }
    }
}

class PSDelete {
    /**
     * Instance of PSDataTable
     *
     * @param string title
     * @param array  columns
     * @param string lang
     * @param string datatable
     * @param string buttons
     *
     * @return DataTable
     */
    constructor(selector, title, form, action) {
        this.selector = selector;
        this.title = title;
        this.form = form;
        this.action = action;

        this.init();
    }
    init() {
        const self = this;

        $(self.selector).on('submit', function (e) {
            e.preventDefault();
            const form = e.currentTarget;
            const tr = $(form).parents('tr');
            const action = form.action;

            Swal.fire({
                // title: 'Tem certeza de que deseja deletar esta empresa?',
                title: self.title,
                // text: "Você não poderá voltar atrás!",
                text: self.text,
                // icon: 'warning',
                icon: self.action,
                showCancelButton: true,
                showLoaderOnConfirm: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, desejo deletar!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: action,
                        method: 'DELETE',
                        dataType: 'json',
                        cache: false,
                        success: function (response) {
                            if (response.success) {
                                $("#main-datatable").DataTable().row(tr).remove().draw();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deletada!',
                                    text: response.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: response.message,
                                    confirmButtonText: 'Fechar'
                                });
                            }
                        },
                        error: function (err) {
                            Swal.showValidationMessage(
                                `Ocorreu uma falha de requisição: ${err}`
                            );
                        }
                    });
                }
            });
        });
    }
}
