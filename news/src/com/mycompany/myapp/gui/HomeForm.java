package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;


public class HomeForm extends Form {

	public HomeForm(String home) {
		
		setLayout ( new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
	     setTitle("Welcome");
		
	     
	     //admin interface
	     
	     if (home.equals("admin")) {
	     Button article = new Button("Articles");
	     
	     Button category = new Button("Categories");
	     

	     Container centered = BoxLayout.encloseY(article, category );

	     addComponent(BorderLayout.CENTER, centered  );
	     
	     category.addActionListener((e) -> {

	     	Form cf=new category_list();
	     cf.show();
	     });
	     
	     article.addActionListener((e) -> {
	    	 
		     	Form cf=new article_list("main");
		     	cf.show();
		     });
	     
	     }
	     
	     
	     
	     
	     //user interface
	    	 if (home.equals("user")) {
	    		 
	    	  	  getToolbar().addCommandToSideMenu(null, null, (evt) -> {

	    	          
	    	      });
	    	      
	    		 
	    	      getToolbar().addCommandToSideMenu("Home", null, (evt) -> {
	    	    	  Dialog.show("Information", "you're already here !", "OK", null);
	    	            
	    	        });
	    	      
	    	      getToolbar().addCommandToSideMenu("articles", null, (evt) -> {
	  		     new article_list("front").show();
	    	            
	    	        });

	    		 

	    	 }
		
	}
	
}
