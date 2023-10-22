(function ($) {
  'use strict';
  $(function () {
    var todoListItem = $('.todo-list');
    var todoListInput = $('.todo-list-input');
    var pageUrl = "http://localhost/Myflix/admin/new/php-script/todo.php";
    $('.todo-list-add-btn').on("click", function (event) {
      event.preventDefault();
      var item = $(this).prevAll('.todo-list-input').val();

      // Create Task and Updated To Database
      var rootaddress = location.hostname; // return Localhost
      $.ajax({
        type: "POST",
        url: pageUrl,
        data: {
          task: item,
          work: "create"
        },
        success: function (success) {
          // add Item in LIst
          todoListItem.append("<li><div class='form-check'><label class='form-check-label'><input class='checkbox' type='checkbox'/>" + item + "<i class='input-helper'></i></label></div><i class='remove mdi mdi-close-box'></i></li>");
          // clear Input Value
          todoListInput.val("");
        },
        error: function (error) {
          console.log("Sorry There Was Some Error In System ! " + error);
        }
      });

    });

    todoListItem.on('change', '.checkbox', function () {
      let taskid = $(this).val();

      if ($(this).attr('checked')) {
        // Remove Completion
        $.ajax({
          type: "POST",
          url: pageUrl,
          data: {
            task: taskid,
            work: "removecomplete"
          },
          success: function (success) {
            $(this).removeAttr('checked');
          },
          error: function (error) {
            console.log("Sorry There Was Some Error In System ! " + error);
          }
        });

      } else {
        // Make Completion
        $.ajax({
          type: "POST",
          url: pageUrl,
          data: {
            task: taskid,
            work: "complete"
          },
          success: function (success) {
            $(this).attr('checked', 'checked');
          },
          error: function (error) {
            console.log("Sorry There Was Some Error In System ! " + error);
          }
        });
      }

      $(this).closest("li").toggleClass('completed');

    });

    todoListItem.on('click', '.remove', function () {
      let taskid = $(".checkbox").val();
      $.ajax({
        type: "POST",
        url: pageUrl,
        data: {
          task: taskid,
          work: "delete"
        },
        success: function (success) {
          // $(this).attr('checked', 'checked');
        },
        error: function (error) {
          console.log("Sorry There Was Some Error In System ! " + error);
        }
      });
      
      $(this).parent().remove();      
      
    });


  






  });



})(jQuery);