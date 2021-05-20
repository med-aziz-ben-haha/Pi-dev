package com.mycompany.myapp.gui;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Slider;
import com.codename1.ui.URLImage;
import com.codename1.ui.animations.ComponentAnimation;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.mycompany.myapp.entity.article;
import com.mycompany.myapp.services.service_article;

public class article_details extends Form {
	

	Label tit;
	SpanLabel cont , des;
	Slider s=new Slider();
	
	article_details(article a){
		
		setTitle(a.getTitre());
		
		String link=a.getImage().substring(14);
		System.out.print( "http://localhost/"+link);
		  EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(1125, 250, 0xffffffff), true);
	        URLImage background = URLImage.createToStorage(placeholder, "http://localhost/"+link,
	        		"http://localhost/"+link);

	        background.fetch();
	        Style stitle = getToolbar().getTitleComponent().getUnselectedStyle();
	        stitle.setBgImage(background);
	        //stitle.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
	        //stitle.setPaddingUnit(Style.UNIT_TYPE_DIPS, Style.UNIT_TYPE_DIPS, Style.UNIT_TYPE_DIPS, Style.UNIT_TYPE_DIPS);
	        stitle.setPaddingTop(25);
	        stitle.setPaddingRight(112);;
	       
	        ComponentAnimation title = getToolbar().getTitleComponent().createStyleAnimation("Title", 200);
	        getAnimationManager().onTitleScrollAnimation(title);
		
                
                //back button
Button lsav=new Button();
lsav.setUIID("Button");
Style savstyl=new Style (lsav.getUnselectedStyle());

	//image
FontImage savimg = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, savstyl);
lsav.setIcon(savimg);
lsav.setTextPosition(RIGHT);
	//click
lsav.addPointerPressedListener(l->{
	new article_list("liked").show();
});
                
                
                
                
                
                
                                    
		tit = new Label(a.getTitre());
		cont = new SpanLabel (a.getContent());
		
		
		des= new SpanLabel (a.getDescription());
		Container c=BorderLayout.center(BoxLayout.encloseY(des,s));
		c.setUIID("TextField");	
		
		Container cnt=BorderLayout.center(BoxLayout.encloseY(c,cont,lsav));
        add(cnt);

	}
	


	
}
