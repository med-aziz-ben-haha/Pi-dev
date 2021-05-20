package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.validation.Constraint;
import com.codename1.ui.validation.Validator;
import SahtiTN.entities.categorie;
import SahtiTN.services.service_categorie;
import SahtiTN.tools.Session;
import com.codename1.ui.FontImage;

public class category_form extends Form {
	
String titre,description;
	
	Validator validator = new Validator();

	TextField tit=new TextField();
	TextField desc=new TextField();
        
    Button submit_button = new Button("Submit");
    
	categorie c = null;
	service_categorie sc = null;
    
   category_form(String task, categorie cat) {
      getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});    	
		
		setLayout(new FlowLayout(CENTER,CENTER));
        setTitle("Details Category");
         
        //title
        tit.setHint("Title here (5 - 15)");
        tit.setMaxSize(15);
             //check
        validator.addConstraint(tit, new Constraint() {
      	  public  boolean isValid(Object value) {
  		    String v = (String)tit.getText();
  		 if ( v.length() < 5 ) return false;
  		 else return true;
  		  }
  		  public String getDefaultFailMessage() {
  		    return "Minimal length is 5 caracters";
  		  }
  		});
        
        //description
        desc.setHint("Description here (10 - 200)");
        desc.setMaxSize(200);
             //check
        validator.addConstraint(desc, new Constraint() {
      	  public  boolean isValid(Object value) {
  		    String v = (String)desc.getText();
  		 if ( v.length() < 10 ) return false;
  		 else return true;
  		  }
  		  public String getDefaultFailMessage() {
  		    return "Minimal length is 10 caracters";
  		  }
  		});

        
        if (task == "edit") {
        	
        	tit.setText(cat.getTitre());
        	desc.setText(cat.getDescription());
        }
        
        
        //add all elements
        addAll(tit,desc,submit_button);
        
        
        //configure submit  button
        submit_button.addActionListener((e) -> {
        	if (validator.isValid()) {
        		getinfo();
        		
        		c = new categorie (titre,description);
        		sc = new service_categorie();
        		//adding
                	if (task == "add") {
                if(sc.add(c)){
    				message("category added successfully");
    				go_list();
                    }
                else 
                	message("failed to add category");	
                	}
                	
                //editing
                	if (task == "edit") {
                	
                		c.setId(cat.getId());
                		System.out.println(c.getId()+" // "+c.getTitre()+" // "+c.getDescription());
                        if(sc.edit(c)) {
                        	
                        	
        				message("category edited successfully");
        				go_list();
                        }
                        else 
                        	message("failed to edit category");	
                        	}
                	
            }
        });
        
        //back button
        getToolbar().addCommandToLeftBar("<--",null,(evt)->{
        	go_list();
        	});
        
    	
    }
    
    
	public void getinfo() {
		
		titre=tit.getText();
		description=desc.getText();

	}
	
	public void message(String s) {
		
		ToastBar.Status status = ToastBar.getInstance().createStatus();
		  status.setMessage(s);
		  status.setExpires(3000);  
		  status.show();
		
	}
	
public void go_list() {
		
	Form list = new category_list();
    list.show();
		
	}



}
