package SahtiTN.gui;

import SahtiTN.MyApplication;
import SahtiTN.entities.User;
import com.codename1.capture.Capture;
import java.util.ArrayList;

import com.codename1.components.Switch;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.validation.Constraint;
import com.codename1.ui.validation.Validator;
import SahtiTN.entities.article;
import SahtiTN.entities.categorie;
import SahtiTN.services.service_article;
import SahtiTN.services.service_categorie;
import SahtiTN.tools.Session;
import com.codename1.ui.FontImage;
import rest.file.uploader.tn.FileUploader;


public class article_form extends Form {

String titre, description, category, content, active="0",cat_id;

Validator validator = new Validator();

TextField tit=new TextField();

 TextField desc=new TextField();
      
 TextField cont=new TextField();
 
 Label act_label= new Label ("Save Draft");
 Switch act = new Switch();

 Container act_container=BoxLayout.encloseX(act,act_label);
 
 Picker cat = new Picker();
 
 Button submit_button = new Button("Submit");
      
 Container container=BoxLayout.encloseY(cat,act_container,submit_button);

	article a = null;
	service_article sa = null;

article_form(String task, article art,String view) {
	  getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});    	
			setLayout(new FlowLayout(CENTER,CENTER));
	        setTitle("Details Article");
	        
	        //title
	        tit.setHint("Title here (3 - 200)");
	        tit.setMaxSize(200);
	             //check
	        validator.addConstraint(tit, new Constraint() {
	      	  public  boolean isValid(Object value) {
	  		    String v = (String)tit.getText();
	  		 if ( v.length() < 3 ) return false;
	  		 else return true;
	  		  }
	  		  public String getDefaultFailMessage() {
	  		    return "Minimal length is 3 caracters";
	  		  }
	  		});
	        
	        
	        //description
	        desc.setHint("Description here (10 - 300)");
	        desc.setMaxSize(300);
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
	        
	        
	        //content
	        cont.setHint("Content here (100 - 500)");
	        cont.setMaxSize(500);
	             //check
	        validator.addConstraint(cont, new Constraint() {
	      	  public  boolean isValid(Object value) {
	  		    String v = (String)cont.getText();
	  		 if ( v.length() < 10 ) return false;
	  		 else return true;
	  		  }
	  		  public String getDefaultFailMessage() {
	  		    return "Minimal length is 100 caracters";
	  		  }
	  		});
	        
if(task=="edit") {
	        	
	        	//active
	        	if (art.getActive().equals("0")) {act.setOff(); active="0"; act_label.setText("Save Draft");}
	        	else {act.setOn(); active="1"; act_label.setText("Publish");}
	        	
	        	//text fields
	        	cont.setText(art.getContent());
	        	desc.setText(art.getDescription());
	        	tit.setText(art.getTitre());
	        }

	        //active
	        act_label.setUIID("TextArea");
	        act.addActionListener((e) -> {
	        	 if (act.isOn()){
	        		 act_label.setText("Publish");
	        		 active="1";
	             }else{
	            	 act_label.setText("Save Draft");
	            	 active="0";
	             }
	        });  
	        
	        //categories
	        
	        ArrayList <categorie> list=service_categorie.getInstance().afficherliste();
	        String characters[] = new String[list.size()];
	  	        for (int j = 0; j < list.size(); j++) {
	  	  	        	characters[j] = list.get(j).getTitre();
	        }
	        
	        cat.setStrings(characters);
	        cat.setSelectedString(characters[0]);	        
	        cat.addActionListener(evt -> {
	        	category=cat.getSelectedString();
		        for(categorie obj : list) {
		            if(obj.getTitre().equals(category)) {
		                  
		                  cat_id=String.valueOf(obj.getId());
		                  System.out.println("Value: " + obj.getId()+" -> in a string : "+cat_id);
		            }
		        }
		       
			});
	        
	        

	        
	        //add all elements
	        addAll(tit,desc,cont,container);
	        
	        
	        //configure submit  button
	        submit_button.addActionListener(new ActionListener() {
                            @Override
                            public void actionPerformed(ActionEvent e) {
                                if (validator.isValid()) {
                                    getinfo();
                                    
                                    
                                    
                                    
                                    
                                    if (art== null) {
                                        String image;
                                        image ="C:\\wamp64\\www\\PIJAVA\\uploads\\f_60807a9a7c1c4.jpg" ;
                                        
                                    /*    String img= Capture.capturePhoto(1024, -1);
                                        
                                        FileUploader fu = new FileUploader("http://localhost/PIJAVA/");
                                        
                                        String fileNameInServer = null;

                                        fileNameInServer = fu.upload(img);
                                        
                                        image = "C:\\wamp64\\www\\PIJAVA\\uploads\\"+fileNameInServer ;
                                        
                                        System.out.print( image);
                                        */
                                        a = new article (titre,description,content,active,cat_id,"0",image);
                                        
                                    }else
                                        a = new article (titre,description,content,active,cat_id,art.getVue(),art.getImage());
                                    sa= new service_article();
                                    
                                    //adding
                                    if (task == "add") {
                                        if(sa.add(a)){
                                            message("article added successfully");
                                            go_list(view);
                                        }
                                        else
                                            message("failed to add article");
                                    }
                                    
                                    //editing
                                    if (task == "edit") {
                                        a.setId(art.getId());
                                        if(sa.edit(a)) {
                                            message("article edited successfully");
                                            go_list(view);
                                        }
                                        else
                                            message("failed to article category");
                                    }
                                    
                                }       }
                        });
	        
	        //back button
	        getToolbar().addCommandToLeftBar("<--",null,(evt)->{
	        	go_list(view);
	        	});
	        
	    	
	    }
	    
	    
		public void getinfo() {
			
			titre=tit.getText();
			content=cont.getText();
			description = desc.getText();
			category=cat.getText();

		}
		
		public void message(String s) {
			
			ToastBar.Status status = ToastBar.getInstance().createStatus();
			  status.setMessage(s);
			  status.setExpires(3000);  
			  status.show();
			
		}
		
	public void go_list(String view) {
			
		Form list = new article_list( view);
	    list.show();
			
		}

}
