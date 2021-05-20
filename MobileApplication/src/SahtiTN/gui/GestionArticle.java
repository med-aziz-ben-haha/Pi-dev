package SahtiTN.gui;

import SahtiTN.MyApplication;
import SahtiTN.tools.Session;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;


public class GestionArticle extends Form {

	public GestionArticle(String home) {
		  getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});
		setLayout ( new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
	     setTitle("Welcome");
		
	     
	     //admin interface
	     
	
	     Button article = new Button("Articles");
	     
	     Button category = new Button("Categories");
	      Button acceuil = new Button("Acceuil");

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
              acceuil.addActionListener((e) -> {

	   new HomePageBackForm().show();
	    
	     });

	     
	     
	     
	     
	     
	   
             
		
	}
	
}
