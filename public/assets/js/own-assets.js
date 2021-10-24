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
    constructor(options) {
        this.title = options.title;
        this.columns = options.columns;
        this.lang = options.lang;
        this.datatable = (options.datatable) ? options.datatable : '#main-datatable';
        this.dom = (options.dom) ? options.dom : 'Brti';
        this.buttons = (options.buttons) ? options.buttons : false;
        this.perPage = (options.perPage) ? options.perPage : 30;
        this.paging = (options.paging) ? options.paging : true;
        this.order = (options.order) ? options.order : [[ 0, "asc" ]];
        this.domJquery;

        this.init();
    }
    init() {
        const self = this;

        $(this.datatable).DataTable({
            "dom": self.dom,
            "responsive": true,
            "info": false,
            "autoWidth": false,
            "pageLength": self.perPage,
            "lengthChange": false,
            "paging": self.paging,
            "order": self.order,
            "language": {
                "url": self.lang
            },
            "buttons": [
                {
                    "extend": "csvHtml5",
                    "title": self.title,
                    "text": '<i class="fas fa-file-csv"></i>',
                    "className": "btn btn-dark",
                    "exportOptions": {
                        "columns": self.columns
                    }
                },
                {
                    "extend": "excelHtml5",
                    "title": self.title,
                    "text": '<i class="fas fa-file-excel"></i>',
                    "className": "btn btn-success",
                    "exportOptions": {
                        "columns": self.columns
                    }
                },
                {
                    "extend": "pdfHtml5",
                    "title": self.title,
                    "text": '<i class="fas fa-file-pdf"></i>',
                    "className": "btn btn-danger",
                    "pageSize": "A4",
                    "exportOptions": {
                        "columns": self.columns
                    },
                    "customize": function (doc) {
                        doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    }
                },
                {
                    "extend": "print",
                    "title": self.title,
                    "text": '<i class="fas fa-print"></i>',
                    "className": "btn btn-info",
                    "exportOptions": {
                        "columns": self.columns
                    },
                }
            ]
        });

        if (self.buttons) {
            $(self.datatable).DataTable().buttons().container().appendTo(self.buttons);
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
    constructor(selector, title, form, action, operation) {
        this.selector = selector;
        this.title = title;
        this.form = form;
        this.action = action;
        this.operation = operation;

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
                                    title: `${self.operation}!`,
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
