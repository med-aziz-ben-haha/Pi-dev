package SahtiTN.gui;

import java.util.ArrayList;

import com.codename1.components.*;
import com.codename1.ui.*;
import com.codename1.ui.layouts.*;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.table.DefaultTableModel;
import com.codename1.ui.table.Table;
import com.codename1.ui.table.TableModel;
import com.codename1.ui.util.Resources;
import SahtiTN.services.service_categorie;
import SahtiTN.entities.categorie;


public class category_list extends Form{
	
	
	category_list(){
		
        
        getToolbar().addCommandToSideMenu(null, null, (evt) -> {

            
        });

        
        getToolbar().addCommandToSideMenu("Home", null, (evt) -> {
        	new GestionArticle("admin").show();
            
        });
        
        getToolbar().addCommandToSideMenu("Articles", null, (evt) -> {
        	new article_list("main").show();
        	
        });

        
        getToolbar().addCommandToSideMenu("Categories", null, (evt) -> {
        	Dialog.show("Information", "you're already here !", "OK", null);
        });
        
        
        //search
        
        //prepare field
        TextField searchField = new TextField("", "Categories' List"); 
        searchField.getHintLabel().setUIID("Title");
        searchField.setUIID("Title");
        getToolbar().setTitleComponent(searchField);
        
        //if field content changed
        searchField.addDataChangeListener((i1, i2) -> { 
            String t = searchField.getText();
            if(t.length() < 1) {
                for(Component cmp : getContentPane()) {
                    cmp.setHidden(false);
                    cmp.setVisible(true);
                }
            } else {
                t = t.toLowerCase();
                for(Component cmp: getContentPane()) {
                	
                    String val = ((SpanLabel) ((Container)((Container) cmp).getComponentAt(0)).getComponentAt(0)).getText();
                    System.out.println( val    );
                    boolean show = val != null && val.toLowerCase().indexOf(t) > -1;
                    cmp.setHidden(!show);
                    cmp.setVisible(show);
                }
            }
            getContentPane().animateLayout(250);
        });
     

       

        
ArrayList <categorie> list=service_categorie.getInstance().afficherliste();
for (categorie cat : list) {
	add(createWidget(cat));
	//addfield(cat);
}
	
        getToolbar().addCommandToRightBar("ADD",null,(evt)->{
            Form add = new category_form("add",null);
        	add.showBack();
        
        	});
		
	}
	
	
	
    public SwipeableContainer createWidget(categorie cat) {
    	//title
    			SpanLabel ta = new SpanLabel(cat.getTitre());
    	ta.setTextSelectionEnabled(false);
    	ta.setUIID("Label");
    			
    		//description	
    	SpanLabel des = new SpanLabel(cat.getDescription());
    	des.setTextSelectionEnabled(false);
    	des.setUIID("Label");
    	//the container of each category
    	Container cnt=BorderLayout.center(BoxLayout.encloseY(ta,des));
    	cnt.setUIID("TextArea");
        return new SwipeableContainer(FlowLayout.encloseCenterMiddle(createSlider(cat)), 
        		cnt);
    }




    private Container createSlider(categorie cat) {
    	
    	//delete button
    	Label lsupp=new Label();
    	lsupp.setUIID("Button");
    	Style suppstyl=new Style (lsupp.getUnselectedStyle());

    	suppstyl.setFgColor(0xf21f1f);
    		//image
    	FontImage suppimg = FontImage.createMaterial(FontImage.MATERIAL_DELETE , suppstyl);
    	lsupp.setIcon(suppimg);
    	lsupp.setTextPosition(RIGHT);
    		//click
    	lsupp.addPointerPressedListener(l->{
    		Dialog dia= new Dialog("Delete Category");
    		
    		if(dia.show("DELETE CATEGORY","Are you sure you want to delete this category ?", "Cancel", "Ok")) dia.dispose();
    		else {
    			dia.dispose();
    			if(service_categorie.getInstance().delete(cat.getId())) {
    		     	Form cl=new category_list();
    		     	cl.show();
    			}
    		}
    		
    	});

    	//update button
    	Label lupd=new Label();
    	lupd.setUIID("Button");
    	Style updstyl=new Style (lsupp.getUnselectedStyle());

    	updstyl.setFgColor(0xf7ad02);
    		//image
    	FontImage updimg = FontImage.createMaterial(FontImage.MATERIAL_MODE_EDIT , updstyl);
    	lupd.setIcon(updimg);
    	lupd.setTextPosition(RIGHT);
    		//click
    	lupd.addPointerPressedListener(l->{
    		  Form add = new category_form("edit",cat);
    	  	add.showBack();
    		
    	});
Container cnt=BorderLayout.center(BoxLayout.encloseX(lsupp,lupd));
        return cnt;
    }
	
	
/*
	private void addfield(categorie cat) {

//title
		SpanLabel ta = new SpanLabel(cat.getTitre());
ta.setTextSelectionEnabled(false);
ta.setUIID("Label");
		
	//description	
SpanLabel des = new SpanLabel(cat.getDescription());
des.setTextSelectionEnabled(false);
des.setUIID("Label");


//delete button
Label lsupp=new Label();
lsupp.setUIID("Button");
Style suppstyl=new Style (lsupp.getUnselectedStyle());

suppstyl.setFgColor(0xf21f1f);
	//image
FontImage suppimg = FontImage.createMaterial(FontImage.MATERIAL_DELETE , suppstyl);
lsupp.setIcon(suppimg);
lsupp.setTextPosition(RIGHT);
	//click
lsupp.addPointerPressedListener(l->{
	Dialog dia= new Dialog("Delete Category");
	
	if(dia.show("DELETE CATEGORY","Are you sure you want to delete this category ?", "Cancel", "Ok")) dia.dispose();
	else {
		dia.dispose();
		if(service_categorie.getInstance().delete(cat.getId())) {
	     	Form cl=new category_list();
	     	cl.show();
		}
	}
	
});

//update button
Label lupd=new Label();
lupd.setUIID("Button");
Style updstyl=new Style (lsupp.getUnselectedStyle());

updstyl.setFgColor(0xf7ad02);
	//image
FontImage updimg = FontImage.createMaterial(FontImage.MATERIAL_MODE_EDIT , updstyl);
lupd.setIcon(updimg);
lupd.setTextPosition(RIGHT);
	//click
lupd.addPointerPressedListener(l->{
	  Form add = new category_form("edit",cat);
  	add.showBack();
	
});

//the container of each category
Container cnt=BorderLayout.center(BoxLayout.encloseY(ta,des,BoxLayout.encloseX(lupd,lsupp)));
cnt.setUIID("TextArea");
add(cnt);


	}
*/
}
