var index =  function index (){

    var Pages = new Pages()

    var Server = new Server()

    init()

    function init() {

        $(document).ready(function () {

            switch (location.pathname) {
                case "/categories":
                    Pages.initCategories()

                case "/expenses":
                    Pages.initExpenses()
            }

        });

    }

    function Pages () {
        var that = this;

        that.initCategories = function () {

            var Events = new Events();

            init()

            function init() {

                if ($("#category-page").length == -1) {
                    return;
                }

                $(document).on("ready", function () {

                    $(".edit-button").on("click", function(event) { Events.getSelectedCategory(event) });

                });
            }

            function Events() {

                var that = this;

                that.getSelectedCategory = function (event) {

                    init(event)

                    function init(event) {

                        var id = $(event.target).data("id");

                        var data = {
                            "id" : id
                        }

                        Server.getSelectedCategory(data, beforeRequest, afterRequest);
                    }

                    function beforeRequest(){}

                    function afterRequest(){}
                 
                }
            }
        }

        that.initExpenses = function () {

            var Events = new Events();

            init()

            function init()
            {
                if ($("#expenses-page").length == -1) {
                    return;
                }

                $(document).ready(function () {
                    //$(document).on(".edit-button", "click", function(event) { Events.getSelectedExpense(event) });
                    $(".edit-button").on("click", function(event) { Events.getSelectedExpense(event) });
                })
            }

            function Events() {

                var that = this;

                that.getSelectedExpense = function (event) {

                    init(event)

                    function init(event) {

                        var id = $(event.target).data("id");

                        var data = {
                            "id" : id
                        }

                        Server.getSelectedExpense(data, beforeRequest, afterRequest);
                    }

                    function beforeRequest(){}

                    function afterRequest(data, response) {
                        var expense = response.expense;

                        $("#expense_id").val(expense.id);
                        $("#expense").val(expense.expense);
                        $("#budget_id option[value='"+ expense.budget_id +"']").prop("selected", true);
                        $("#category_id option[value='"+ expense.category_id +"']").prop("selected", true);
                        $("#price").val(expense.price);
                        $("#expense_date").val(expense.expense_date);
                    }
                 
                }
            }
        } 

    }

    function Server() {
        var that = this;

        that.getSelectedCategory = function(data, beforeRequest, afterRequest) {

            beforeRequest(data)

            makeRequest("post", "/get-category", data, afterRequest);
        }

        that.getSelectedExpense = function(data, beforeRequest, afterRequest) {

            beforeRequest(data)

            makeRequest("post", "/get-expense", data, afterRequest);
        }

        function makeRequest(type, url, data, afterRequest) {

            $.ajax({
                type : type,
                url : url,
                data : data,
                dataType : "json",
                success : function(response) {
                    afterRequest(data, response)
                },
                error: function(response) {
                    afterRequest(data, {})
                }
            })
        }
    }

}()