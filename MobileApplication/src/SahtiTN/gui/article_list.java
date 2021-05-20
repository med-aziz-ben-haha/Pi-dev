package SahtiTN.gui;

import SahtiTN.MyApplication;
import java.util.ArrayList;

import com.codename1.charts.ChartComponent;
import com.codename1.charts.models.CategorySeries;
import com.codename1.charts.renderers.DefaultRenderer;
import com.codename1.charts.renderers.SimpleSeriesRenderer;
import com.codename1.charts.util.ColorUtil;
import com.codename1.charts.views.PieChart;
import com.codename1.components.MultiButton;
import com.codename1.components.SpanLabel;
import com.codename1.io.Log;
import com.codename1.messaging.Message;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.SwipeableContainer;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import SahtiTN.entities.article;
import SahtiTN.services.service_article;
import SahtiTN.tools.Session;

public class article_list extends Form {

    public article_list(String view) {

        setTitle("List Articles");

        ArrayList<article> list = service_article.getInstance().afficherliste();

        Style s = UIManager.getInstance().getComponentStyle("");
        s.setFgColor(0xFF69B4);
        FontImage searchIcon = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, s);

        // Generate the values
        int value1 = 0, value2 = 0;
        for (article cat : list) {
            if (cat.getVue().equals("1")) {
                value1++;
            } else if (cat.getVue().equals("0")) {
                value2++;
            }
        }
        double[] values = new double[]{value1, value2};

        // Set up the renderer
        int[] colors = new int[]{ColorUtil.rgb(0, 180, 0), ColorUtil.rgb(180, 0, 180)};
        DefaultRenderer renderer = buildCategoryRenderer(colors);
        renderer.setDisplayValues(true);
        renderer.setShowLabels(false);

        // Create the chart ... pass the values and renderer to the chart object.
        PieChart chart = new PieChart(buildCategoryDataset("Articles per Category", values), renderer);

        // Wrap the chart in a Component so we can add it to a form
        ChartComponent c = new ChartComponent(chart);

        Dialog d = new Dialog();
        c.addPointerPressedListener(e -> {
            d.dispose();
        });
        d.add(c);

        getToolbar().addCommandToSideMenu(null, null, (evt) -> {

        });

        //main category for articles
        if (view.equals("main")) {

            getToolbar().addCommandToOverflowMenu("ADD", null, (evt) -> {
                Form add = new article_form("add", null, view);
                add.showBack();

            });

            getToolbar().addCommandToSideMenu("Articles", null, (evt) -> {
                Dialog.show("Information", "you're already here !", "OK", null);
            });

            getToolbar().addCommandToOverflowMenu("Published", null, (evt) -> {
                new article_list("published").show();

            });

            getToolbar().addCommandToOverflowMenu("Drafts", null, (evt) -> {
                new article_list("draft").show();

            });

            getToolbar().addCommandToOverflowMenu("Likes Stat", null, (evt) -> {
                d.show();
            });

            getToolbar().addCommandToSideMenu("Categories", null, (evt) -> {
                new category_list().show();
            });

            getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {
                new LoginForm(MyApplication.theme).show();
                Session.getSession().clearSession();
            });

        } //draft category
        else if (view.equals("draft")) {

            getToolbar().addCommandToOverflowMenu("ADD", null, (evt) -> {
                Form add = new article_form("add", null, view);
                add.showBack();

            });

            getToolbar().addCommandToSideMenu("Articles", null, (evt) -> {
                new article_list("main").show();
            });

            getToolbar().addCommandToOverflowMenu("Published", null, (evt) -> {
                new article_list("published").show();

            });

            getToolbar().addCommandToOverflowMenu("Drafts", null, (evt) -> {
                Dialog.show("Information", "you're already here !", "OK", null);
            });

            getToolbar().addCommandToOverflowMenu("Likes Stat", null, (evt) -> {
                d.show();
            });

            getToolbar().addCommandToSideMenu("Categories", null, (evt) -> {
                new category_list().show();
            });
            getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {
                new LoginForm(MyApplication.theme).show();
                Session.getSession().clearSession();
            });

        } //published category
        else if (view.equals("published")) {

            getToolbar().addCommandToOverflowMenu("ADD", null, (evt) -> {
                Form add = new article_form("add", null, view);
                add.showBack();

            });

            getToolbar().addCommandToSideMenu("Articles", null, (evt) -> {
                new article_list("main").show();
            });

            getToolbar().addCommandToOverflowMenu("Published", null, (evt) -> {
                Dialog.show("Information", "you're already here !", "OK", null);

            });

            getToolbar().addCommandToOverflowMenu("Drafts", null, (evt) -> {
                new article_list("draft").show();
            });

            getToolbar().addCommandToOverflowMenu("Likes Stat", null, (evt) -> {
                d.show();
            });

            getToolbar().addCommandToSideMenu("Categories", null, (evt) -> {
                new category_list().show();
            });

            getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {
                new LoginForm(MyApplication.theme).show();
                Session.getSession().clearSession();
            });

        } //front
        else if (view.equals("front")) {

            getToolbar().addCommandToRightBar("", searchIcon, (e) -> {
                new article_list("liked").show();
            });

            getToolbar().addCommandToSideMenu("Articles", null, (evt) -> {
                Dialog.show("Information", "you're already here !", "OK", null);

            });
            getToolbar().addCommandToSideMenu("Acceuil", null, (evt) -> {
                new HomePageForm(Session.getSession().getSessionUser()).show();

            });
            getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {
                new LoginForm(MyApplication.theme).show();
                Session.getSession().clearSession();
            });

        } //front
        else if (view.equals("liked")) {
            getToolbar().addCommandToSideMenu("Articles", null, (evt) -> {
                new article_list("front").show();

            });
            getToolbar().addCommandToSideMenu("Acceuil", null, (evt) -> {
                new HomePageForm(Session.getSession().getSessionUser()).show();

            });
            getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {
                new LoginForm(MyApplication.theme).show();
                Session.getSession().clearSession();
            });

        }

        for (article cat : list) {

            if (view.equals("published")) {
                if (cat.getActive().equals("1")) {
                    add(createWidget(cat, "published"));
                }
                //addfield(cat,"published");
            } else if (view.equals("draft")) {
                if (cat.getActive().equals("0")) {
                    add(createWidget(cat, "draft"));
                }
                //addfield(cat,"draft");
            } else if (view.equals("main")) {
                add(createWidget(cat, "main"));
                //addfield(cat,"main");
            } else if (view.equals("front")) {
                if (cat.getActive().equals("1")) {
                    add(createWidget(cat, "front"));
                }
                //addfield(cat,"front");
            } else if (view.equals("liked")) {
                if (cat.getActive().equals("1") && cat.getVue().equals("1")) {
                    add(createWidget(cat, "liked"));
                }
                //addfield(cat,"liked");
            }
        }

        search();

    }

    public SwipeableContainer createWidget(article cat, String view) {
    	   //title
		 Button ta = new  Button(cat.getTitre());
ta.setTextSelectionEnabled(false);
ta.setUIID("Label");
		
	//description	
SpanLabel des = new  SpanLabel(cat.getDescription());
des.setTextSelectionEnabled(false);
des.setUIID("Label");

//content	
SpanLabel cont = new  SpanLabel(cat.getContent());

cont.setTextSelectionEnabled(false);
cont.setUIID("Label");

//published button -> shows that article is published
Label lpub=new Label();
lpub.setUIID("Button");
Style pubstyl=new Style (lpub.getUnselectedStyle());

pubstyl.setFgColor(0x32CD32);
	//image
FontImage pubimg = FontImage.createMaterial(FontImage.MATERIAL_PUBLISHED_WITH_CHANGES, pubstyl);
lpub.setIcon(pubimg);
lpub.setTextPosition(RIGHT);


//like button
Button lsav=new Button();
lsav.setUIID("Button");
Style savstyl=new Style (lsav.getUnselectedStyle());

if(cat.getVue().equals("1"))
savstyl.setFgColor(0xFF69B4);
	//image
FontImage savimg = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, savstyl);
lsav.setIcon(savimg);
lsav.setTextPosition(RIGHT);
	//click
lsav.addPointerPressedListener(l->{
	article a=null;
	service_article sa= new service_article();
	
	if(cat.getVue().equals("1"))
	a = new article (cat.getTitre(),cat.getDescription(),cat.getContent(),cat.getActive(),cat.getCat_id(),"0",cat.getImage());
	if(cat.getVue().equals("0"))      
	a = new article (cat.getTitre(),cat.getDescription(),cat.getContent(),cat.getActive(),cat.getCat_id(),"1",cat.getImage());

 	a.setId(cat.getId());
 	sa.edit(a); 
 	new article_list(view).show();	 
	//System.out.print(a.getVue());
	 
});



if(view.equals("front") || view.equals("liked")) {
    ta.addPointerPressedListener(l->{
    	new article_details(cat).show();
  	
  });

Container cnt=BorderLayout.center(BoxLayout.encloseY(BoxLayout.encloseX(ta),lsav,des,cont));
cnt.setUIID("TextArea");
return new SwipeableContainer(FlowLayout.encloseCenterMiddle(createSlider(cat,view)), cnt);




}else
if(view.equals("published") )
    //if in publish  show the publish icon
       {
            Container cnt=BorderLayout.center(BoxLayout.encloseY(BoxLayout.encloseX(ta,lpub),des,cont));
            cnt.setUIID("TextArea");
            return new SwipeableContainer(FlowLayout.encloseCenterMiddle(createSlider(cat,view)), cnt);
        }
    else if(view.equals("main"))
     //show all articles in back
           {
    	if(cat.getActive().equals("1")) {    //if published  show the publish icon
                Container cnt=BorderLayout.center(BoxLayout.encloseY(BoxLayout.encloseX(ta,lpub),des,cont));
                cnt.setUIID("TextArea");
                return new SwipeableContainer(FlowLayout.encloseCenterMiddle(createSlider(cat,view)), cnt);

            }
    	else if(cat.getActive().equals("0")) {    //if draft  no need to show the publish icon
            Container cnt=BorderLayout.center(BoxLayout.encloseY(BoxLayout.encloseX(ta),des,cont));
            cnt.setUIID("TextArea");
            return new SwipeableContainer(FlowLayout.encloseCenterMiddle(createSlider(cat,view)), cnt);

        }
	
           }

    else if(view.equals("draft"))
        //if in draft no need to show the publish icon
           {
                Container cnt=BorderLayout.center(BoxLayout.encloseY(BoxLayout.encloseX(ta),des,cont));
                cnt.setUIID("TextArea");
                return new SwipeableContainer(FlowLayout.encloseCenterMiddle(createSlider(cat,view)), cnt);
            }
return null;


    }
    
    public void search(){
            
             //search
        
        //prepare field
        TextField searchField;
        searchField = new TextField("", "Articles' List"); 
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
                	
                    String val = ((Button) ((Container) ((Container)((Container) ((Container)((Container) cmp).getComponentAt(2)).getComponentAt(0)).getComponentAt(0)).getComponentAt(0)) .getComponentAt(0)).getText();
                    System.out.println(  val   );
                    boolean show = val != null && val.toLowerCase().indexOf(t) > -1;
                    cmp.setHidden(!show);
                    cmp.setVisible(show);
                }
            }
            getContentPane().animateLayout(250);
        });
            
        }

    private Container createSlider(article cat, String view) {

        //delete button
        Button lsupp = new Button();
        lsupp.setUIID("Button");
        Style suppstyl = new Style(lsupp.getUnselectedStyle());

        suppstyl.setFgColor(0xf21f1f);
        //image
        FontImage suppimg = FontImage.createMaterial(FontImage.MATERIAL_DELETE, suppstyl);
        lsupp.setIcon(suppimg);
        lsupp.setTextPosition(RIGHT);
        //click
        lsupp.addPointerPressedListener(l -> {
            Dialog dia = new Dialog("Delete Category");

            if (dia.show("DELETE ARTICLE", "Are you sure you want to delete this category ?", "Cancel", "Ok")) {
                dia.dispose();
            } else {
                dia.dispose();
                if (service_article.getInstance().delete(cat.getId())) {

                    article_list cl = new article_list(view);
                    cl.show();

                }
            }

        });

        //update button
        Button lupd = new Button();
        lupd.setUIID("Button");
        Style updstyl = new Style(lsupp.getUnselectedStyle());

        updstyl.setFgColor(0xf7ad02);
        //image
        FontImage updimg = FontImage.createMaterial(FontImage.MATERIAL_MODE_EDIT, updstyl);
        lupd.setIcon(updimg);
        lupd.setTextPosition(RIGHT);
        //click
        lupd.addPointerPressedListener(l -> {
            Form add = new article_form("edit", cat, view);
            add.showBack();

        });

        //update button
        Button lshare = new Button();
        lshare.setUIID("Button");
        Style sharestyl = new Style(lshare.getUnselectedStyle());

        sharestyl.setFgColor(0xf7ad02);
        //image
        FontImage shareimg = FontImage.createMaterial(FontImage.MATERIAL_MAIL, sharestyl);
        lshare.setIcon(shareimg);
        lshare.setTextPosition(RIGHT);
        //click
        lshare.addPointerPressedListener(l -> {

            Message m = new Message(cat.getTitre() + System.getProperty("line.separator") + cat.getDescription() + System.getProperty("line.separator") + cat.getContent());
            m.getAttachments().put(cat.getImage(), "image/png");
            Display.getInstance().sendMessage(new String[]{"someone@gmail.com"}, "Sa7ti NewsLetter <news@sa7ti.tn>", m);

        });

        if (view.equals("draft")) //if in draft no need to show the publish icon
        {

            Container cnt = BorderLayout.center(BoxLayout.encloseX(lsupp, lupd));
            return cnt;
        } else if (view.equals("published")) //if in publish  show the publish icon
        {
            Container cnt = BorderLayout.center(BoxLayout.encloseX(lsupp, lupd));
            return cnt;
        } else if (view.equals("main")) //show all articles in back
        {
            if (cat.getActive().equals("1")) {    //if published  show the publish icon
                Container cnt = BorderLayout.center(BoxLayout.encloseX(lsupp, lupd));
                return cnt;
            } else if (cat.getActive().equals("0")) {    //if draft  no need to show the publish icon
                Container cnt = BorderLayout.center(BoxLayout.encloseX(lsupp, lupd));
                return cnt;
            }

        } else if (view.equals("front") || view.equals("liked")) {

            Container cnt = BorderLayout.center(lshare);
            return cnt;

        }

        return null;

    }

    private DefaultRenderer buildCategoryRenderer(int[] colors) {
        DefaultRenderer renderer = new DefaultRenderer();
        renderer.setLabelsTextSize(50);
        renderer.setLegendTextSize(50);
        renderer.setMargins(new int[]{20, 30, 15, 0});
        for (int color : colors) {
            SimpleSeriesRenderer r = new SimpleSeriesRenderer();
            r.setColor(color);
            renderer.addSeriesRenderer(r);
        }
        return renderer;
    }

    protected CategorySeries buildCategoryDataset(String title, double[] values) {
        CategorySeries series = new CategorySeries("Likes Stat");

        series.add("Liked", values[0]);
        series.add("Not Liked", values[1]);

        return series;
    }

    /*
        	private void addfield(article cat, String view) {

        //title
        		 Button ta = new  Button(cat.getTitre());
        ta.setTextSelectionEnabled(false);
        ta.setUIID("Label");
        		
        	//description	
        SpanLabel des = new  SpanLabel(cat.getDescription());
        des.setTextSelectionEnabled(false);
        des.setUIID("Label");
        
    	//content	
        SpanLabel cont = new  SpanLabel(cat.getContent());

    cont.setTextSelectionEnabled(false);
    cont.setUIID("Label");

        //delete button
    Button lsupp=new Button();
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
        	
        	if(dia.show("DELETE ARTICLE","Are you sure you want to delete this category ?", "Cancel", "Ok")) dia.dispose();
        	else {
        		dia.dispose();
        		if(service_article.getInstance().delete(cat.getId())) {
        	     	
                	
                    		article_list cl=new article_list(view);
            	     	cl.show();
                   
        			
        		}
        	}
        	
        });

        //update button
        Button lupd=new Button();
        lupd.setUIID("Button");
        Style updstyl=new Style (lsupp.getUnselectedStyle());

        updstyl.setFgColor(0xf7ad02);
        	//image
        FontImage updimg = FontImage.createMaterial(FontImage.MATERIAL_MODE_EDIT , updstyl);
        lupd.setIcon(updimg);
        lupd.setTextPosition(RIGHT);
        	//click
        lupd.addPointerPressedListener(l->{
        	  Form add = new article_form("edit",cat,view);
          	add.showBack();
        	
        });

      //like button
        Button lsav=new Button();
        lsav.setUIID("Button");
        Style savstyl=new Style (lsav.getUnselectedStyle());

        if(cat.getVue().equals("1"))
        savstyl.setFgColor(0xFF69B4);
        	//image
        FontImage savimg = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, savstyl);
        lsav.setIcon(savimg);
        lsav.setTextPosition(RIGHT);
        	//click
        lsav.addPointerPressedListener(l->{
        	article a=null;
        	service_article sa= new service_article();
        	
        	if(cat.getVue().equals("1"))
        	a = new article (cat.getTitre(),cat.getDescription(),cat.getContent(),cat.getActive(),cat.getCat_id(),"0");
        	if(cat.getVue().equals("0"))      
        	a = new article (cat.getTitre(),cat.getDescription(),cat.getContent(),cat.getActive(),cat.getCat_id(),"1");

         	a.setId(cat.getId());
         	sa.edit(a); 
         	new article_list(view).show();	 
        	//System.out.print(a.getVue());
        	 
        });

        //published button -> shows that article is published
        Label lpub=new Label();
        lpub.setUIID("Button");
        Style pubstyl=new Style (lpub.getUnselectedStyle());

        pubstyl.setFgColor(0x32CD32);
        	//image
        FontImage pubimg = FontImage.createMaterial(FontImage.MATERIAL_PUBLISHED_WITH_CHANGES, pubstyl);
        lpub.setIcon(pubimg);
        lpub.setTextPosition(RIGHT);

        
        //the container of each category
        //if main cat show the like button
        if(view.equals("front") || view.equals("liked")) {
            ta.addPointerPressedListener(l->{
            	new article_details(cat).show();
          	
          });

        Container cnt=BorderLayout.center(BoxLayout.encloseY(ta,lsav,des,cont));
        cnt.setUIID("TextArea");
        add(cnt);

        }
        else if(view.equals("draft"))
        //if in draft no need to show the publish icon
           {
                Container cnt=BorderLayout.center(BoxLayout.encloseY(ta,BoxLayout.encloseX(lupd,lsupp),des,cont));
                cnt.setUIID("TextArea");
                add(cnt);
            }
        
        else if(view.equals("published") )
        //if in publish  show the publish icon
           {
                Container cnt=BorderLayout.center(BoxLayout.encloseY(ta,BoxLayout.encloseX(lupd,lsupp,lpub),des,cont));
                cnt.setUIID("TextArea");
                add(cnt);
            }
        else if(view.equals("main"))
         //show all articles in back
               {
        	if(cat.getActive().equals("1")) {    //if published  show the publish icon
                    Container cnt=BorderLayout.center(BoxLayout.encloseY(ta,BoxLayout.encloseX(lupd,lsupp,lpub),des,cont));
                    cnt.setUIID("TextArea");
                    add(cnt);
                }
        	else if(cat.getActive().equals("0")) {    //if draft  no need to show the publish icon
                Container cnt=BorderLayout.center(BoxLayout.encloseY(ta,BoxLayout.encloseX(lupd,lsupp),des,cont));
                cnt.setUIID("TextArea");
                add(cnt);
            }
    	
               }
 

        	}
        	
     */
}
