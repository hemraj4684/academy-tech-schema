$(document).ready(function(){
	 $.validator.addMethod(
	     "DateFormat",
	     function(value, element) {
	     return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
	     },
	      "Please enter a date in the format mm/dd/yyyy"//removed ;
	  );

	$("#frm_registration").validate({
		rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
				contact: {
					required: true,
					number: true
				},
				dob: {
					required: true,
					DateFormat : true
				},
				address: "required",
				upload_photo: "required",
			},

		messages: {
				name: "Please enter the name.",
				email: {
					required: "Please enter the email address.",
					email: "Please enter the valid email address."
				},
				contact: {
					required: "Please enter the contact number.",
					number: "Please enter the numbers only."
				},
				dob: {
					required: "Please enter the date of birth.",
				},
				address: "Please enter the address.",
				upload_photo: "Please select the photo.",
			}
	});

	// User role validation
	$("#frm_role").validate({
		rules: {
				roles_name: "required",
				role_descrip: "required",
				add_group: "required",
			},

		messages: {
			roles_name: "Please enter the role name.",
		
			role_descrip: "Please enter the role description.",

			add_group: "Please select the group.",
		}
	});

	$("#frm_group").validate({
		rules: {
				groups_name: "required",
				group_descrip: "required",
				add_privileges: "required",
			},

		messages: {
			groups_name: "Please enter the group name.",
		
			group_descrip: "Please enter the group description.",

			add_privileges: "Please select the group.",
		}
	});

	$("#frm_privilege").validate({
		rules: {
				privileges_name: "required",
				privilege_descrip: "required",
			},

		messages: {
			privileges_name: "Please enter the privilege name.",
		
			privilege_descrip: "Please enter the privilege description.",

		}
	});

	$("#frm_crs").validate({
		rules: {
				txt_crs_name: "required",
				txt_crs_desc: "required",
			},

		messages: {
			txt_crs_name: "Please enter the Course name.",
		
			txt_crs_desc: "Please enter the Course description.",

		}
	});
	
	$("#frm_edu_div_name").validate({
		rules: {
				edu_div_name: "required",
				edu_div_desc: "required",
			},

		messages: {
			txt_crs_name: "Please enter the education division name.",
		
			txt_crs_desc: "Please enter the education division description.",

		}
	});

	$("#frm_std").validate({
		rules: {
				txt_std_name: "required",
				txt_std_desc: "required",
				txt_duration: "required",
			},

		messages: {
			txt_std_name: "Please enter the standard / year name.",
		
			txt_std_desc: "Please enter the standard / year description.",
			
			txt_duration: "Please enter the duration.",

		}
	});
	
	$("#frm_divisions").validate({
		rules: {
				txt_div_name: "required",
				txt_div_desc: "required",
			},

		messages: {
			txt_div_name: "Please enter the division name.",
		
			txt_div_desc: "Please enter the division description.",

		}
	});

	$("#frm_semesters").validate({
		rules: {
				txt_sem_name: "required",
				txt_sem_desc: "required",
			},

		messages: {
			txt_sem_name: "Please enter the semester name.",
		
			txt_sem_desc: "Please enter the semester description.",

		}
	});
	
	$("#frm_subjects").validate({
		rules: {
				txt_sub_name: "required",
				txt_sub_desc: "required",
			},

		messages: {
			txt_sub_name: "Please enter the subject name.",
		
			txt_sub_desc: "Please enter the subject description.",

		}
	});
	
	$("#frm_employees").validate({
		rules: {
				txt_emp_name: "required",
				txt_emp_midname: "required",
				txt_emp_surname: "required",
				txt_emp_address: "required",
				state: "required",
				txt_city: "required",
				txt_gender: "required",
				txt_email: {
					required: true,
					email: true
				},
				dob: "required",
				marital_status: "required",
				txt_lastqual: "required",
				txt_years: "required",
				txt_months: "required",
				concession_cat: "required",
				religion: "required",
				cast: "required",
				joining_date: "required",
				department: "required",
				employee_cat: "required",
				employee_des: "required",
				bankdetails: "required",
			},

		messages: {
			txt_emp_name: "Please enter the name.",
		
			txt_emp_midname: "Please enter the middle name.",
			
			txt_emp_surname: "Please enter the surname.",
			
			txt_emp_address: "Please enter the address.",
			
			state: "Please enter the state.",
			
			txt_city: "Please enter the city.",
			
			txt_email: {
					required: "Please enter the email address.",
					email: "Please enter the valid email address."
				},
			
			txt_emp_dob: "Please enter the date of birth.",
			
			marital_status: "Please enter the marital status.",
			
			txt_lastqual: "Please enter the last qualification.",
			
			txt_years: "Please enter the years.",
			
			txt_months: "Please enter the months.",
			
			concession_cat: "Please enter the concession categories.",
			
			religion: "Please enter the religion.",
			
			cast: "Please enter the cast.",
			
			joining_date: "Please enter the joining date.",
			
			department: "Please enter the department.",
			
			employee_cat: "Please enter the employee categories.",
			
			employee_des: "Please enter the employee description.",
			
			bankdetails: "Please enter the bankdetails.",
		}
	});
	
	//<!--Cast-->
	$("#frm_cast").validate({
		rules: {
				txt_cast_name: "required",
				txt_cast_desc: "required",
			},

		messages: {
			txt_cast_name: "Please enter the cast name.",
		
			txt_cast_desc: "Please enter the cast description.",
		}
	});
	
	
	
	//<!--Concession category-->
	$("#frm_concession_category").validate({
		rules: {
				txt_con_cat_name: "required",
				txt_con_cat_desc: "required",
			},

		messages: {
			txt_con_cat_name: "Please enter the concession category name.",
		
			txt_con_cat_desc: "Please enter the concession category description.",
		}
	});
	
	
	
	//<!--Department-->
	$("#frm_department").validate({
		rules: {
				txt_dept_name: "required",
				txt_dept_code: "required",
				txt_dept_desc: "required",
				sub_y_n: "required",
			},

		messages: {
			txt_dept_name: "Please enter the department name.",
			
			txt_dept_code: "Please enter the department code.",
		
			txt_dept_desc: "Please enter the department description.",
			
			sub_y_n: "Please select the option.",
		}
	});
	
	//<!--Employee Category-->
	$("#frm_employee_category").validate({
		rules: {
				txt_emp_cat_name: "required",
				txt_emp_cat_desc: "required",
			},

		messages: {
			txt_emp_cat_name: "Please enter the category name.",
			
			txt_emp_cat_desc: "Please enter the category description.",
		}
	});
	
	//<!--Employee Designation-->
	$("#frm_employee_designation").validate({
		rules: {
				txt_emp_desg_name: "required",
				txt_emp_desg_desc: "required",
			},

		messages: {
			txt_emp_desg_name: "Please enter the designation name.",
			
			txt_emp_desg_desc: "Please enter the designation description.",
		}
	});
	
	
	//<!--Enquiry-->
	$("#frm_enquiry").validate({
		rules: {
				enquiry_date: "required",
				student_name: "required",
				res_address: "required",
				gender: "required",
				email: "required",
				enquiry_taken_by: "required",
				remark: "required",
			},

		messages: {
			enquiry_date: "Please enter the enquiry date.",
			
			student_name: "Please enter the student name.",
			
			res_address: "Please enter the address.",
			
			gender: "Please enter the gender.",
			
			email: "Please enter the email.",
			
			enquiry_taken_by: "Please enter the name.",
			
			remark: "Please enter the remark.",
		}
	});
	
	//<!--Enquiry source-->
	$("#frm_enquiry_source").validate({
		rules: {
				txt_enquiry_source_name: "required",
				txt_enquiry_source_desc: "required",
			},

		messages: {
			txt_enquiry_source_name: "Please enter the enquiry source name.",
			
			txt_enquiry_source_desc: "Please enter the enquiry source description.",
		}
	});
	
	
	//<!--Fee heads-->
	$("#frm_feeheads").validate({
		rules: {
				txt_fee_head_name: "required",
				txt_fee_head_desc: "required",
			},

		messages: {
			txt_fee_head_name: "Please enter the fee head name.",
			
			txt_fee_head_desc: "Please enter the fee head description.",
		}
	});
	
	//<!--Religions-->
	$("#frm_religions").validate({
		rules: {
				txt_rel_name: "required",
				txt_rel_desc: "required",
			},

		messages: {
			txt_rel_name: "Please enter the religion name.",
			
			txt_rel_desc: "Please enter the religion description.",
		}
	});
	
	
	//<!--Salary type-->
	$("#frm_salary_type").validate({
		rules: {
				txt_salary_type_name: "required",
				txt_salary_type_desc: "required",
			},

		messages: {
			txt_salary_type_name: "Please enter the salary type name.",
			
			txt_salary_type_desc: "Please enter the salary type description.",
		}
	});
	
	//<!--Religions-->
	$("#frm_religions").validate({
		rules: {
				txt_rel_name: "required",
				txt_rel_desc: "required",
			},

		messages: {
			txt_rel_name: "Please enter the religion name.",
			
			txt_rel_desc: "Please enter the religion description.",
		}
	});
	
	//<!--State-->
	$("#frm_state").validate({
		rules: {
				txt_state_name: "required",
			},

		messages: {
			txt_state_name: "Please enter state name.",
		}
	});
	
	//<!--Student-->
	$("#frm_students").validate({
		rules: {
				txt_stdno: "required",
				admission_date: "required",
				txt_stud_name: "required",
				txt_stud_midname: "required",
				txt_stud_surname: "required",
				txt_emp_address: "required",
				txt_gender: "required",
				dateofbirth: "required",
				txt_birthplace: "required",
				txt_mothertongue: "required",
				txt_pard_name: "required",
				txt_par_midname: "required",
				txt_par_surname: "required",
				txt_relstu: "required",
				txt_occupation: "required",
				txt_yearincome: "required",
				txt_par_address: "required",
				txt_mobileno: "required",
			},

		messages: {
			txt_stdno: "Please enter the roll no.",
			admission_date: "Please enter the admission date",
			txt_stud_name: "Please enter the student name",
			txt_stud_midname: "Please enter the student middle name",
			txt_stud_surname: "Please enter the student surname",
			txt_emp_address: "Please enter the student address",
			txt_gender: "Please enter the gender",
			dateofbirth: "Please enter the date of birth",
			txt_birthplace: "Please enter the birth place",
			txt_mothertongue: "Please enter the mother tongue",
			txt_par_name: "Please enter the parent name",
			txt_par_midname: "Please enter the parent middle name",
			txt_par_surname: "Please enter the parent suname",
			txt_relstu: "Please enter the student relation with parent",
			txt_occupation: "Please enter the occupation",
			txt_yearincome: "Please enter the annual income",
			txt_par_address: "Please enter the parent address",
			txt_mobileno: "Please enter the parent's mobile number",
		}
	});
	
	//<!--System master-->
	$("#frm_system_master").validate({
		rules: {
				txt_school_name: "required",
				txt_school_address: "required",
				txt_contact_person: "required",
				txt_contact_number: "required",
				txt_email: "required",
				txt_app_due_date: "required",
				txt_no_of_student: "required",
				txt_no_of_employees: "required",
			},

		messages: {
			txt_school_name: "Please enter school name.",
			txt_school_address: "Please enter school address.",
			txt_contact_person: "Please enter contact person.",
			txt_contact_number: "Please enter contact number.",
			txt_email: "Please enter email.",
			txt_app_due_date: "Please enter application due date.",
			txt_no_of_student: "Please enter number of student.",
			txt_no_of_employees: "Please enter number of employees.",
		}
	});
	
	
	
	
	
});






