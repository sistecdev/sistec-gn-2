$("#admission-enq-form").submit((e)=>{
    e.preventDefault();
    const formData = $("form#admission-enq-form").serialize();
    const contact = $(".contact-no").val();
    if(contact.length == 10){
        $.post("check-duplicate-admission-enquiry", {contact: contact}, (response) => {
            const res = JSON.parse(response);
            disable_enq_btn("disable");
            if(res.status == 1 && res.data == 0){
                sendAdmissionEnquiry(formData);
            }
            else if(res.status == 1 && res.data > 0){
                $("#contact-error").text("Enquiry has been already sent with this number.");
                disable_enq_btn("enable");
            }
            else if(res.status == 0){
                Swal.fire({ icon: 'error', text: res.msg });
                disable_enq_btn("enable");
            }
        });
    }else{
        $("#contact-error").text("Contact number should be 10 digits only.");
    }
});
sendAdmissionEnquiry = (formData) => {
    $.ajax({
        url: "send-admission-enquiry",
        type: "POST",
        data: formData,
        dataType: "JSON",
        success: (result) => {
            if(result.status == 1){
                const msg = `Dear ${result.data.name}, Your enquiry has been sent successfully !!`;
                Swal.fire({ icon: 'success', text: msg });
            }else{
                Swal.fire({ icon: 'error', text: result.msg });
            }
        }
    }).done(function(){
        disable_enq_btn("enable");
        $('form#admission-enq-form').trigger("reset");
    });
}
disable_enq_btn = (type = "disable") => {
    if(type == "disable"){
        $("#enq-send-btn").attr("disabled", true);
        $("#enq-send-btn").css({"opacity": "0.6"});
        $("#enq-send-btn").text("Please Wait");
    }else{
        $("#enq-send-btn").removeAttr("disabled");
        $("#enq-send-btn").removeAttr("style");
        $("#enq-send-btn").text("SUBMIT");
    }
}
$(document).on("change", ".get-branch-on-course-name", function(){
    const course_name = $(this).val();
    $.get("get-branch-on-course-name", {course_name:course_name}, (res)=>{
        $(".change-branch-options-on-course").html(res);
    });
});
$(document).on("change", ".get-city-on-state-change", function(){
    const state_id = $('option:selected', this).attr('data-id');
    $.get("get-city-on-state", {state_id: state_id}, (res)=>{
        $(".change-city-options-on-state").html(res);
    });
});
$(document).on("click", ".popup-text", function(e){
    e.preventDefault();
    const popupText = $(this).attr("popup-text");
    Swal.fire({ icon: '', text: popupText });
});
