package SahtiTN.services;

import com.codename1.components.ToastBar;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.io.rest.Response;
import com.codename1.io.rest.Rest;
import static com.codename1.push.PushContent.setTitle;
import com.codename1.ui.events.ActionListener;
import SahtiTN.entities.article;
import SahtiTN.tools.Statics;




public class service_article {
	

	public ArrayList<article> articles;
    public static service_article instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
	
    public service_article() {
        req = new ConnectionRequest();
   }
    
    
    public static service_article getInstance() {
        if (instance == null) {
            instance = new service_article();
        }
        return instance;
    }
    
    
    /*
    public void send_mail(article c){
    
            try {
                Properties props=new Properties();
                props.put("mail.transport.protocol", "smtp");
                props.put("mail.smtp.host", "smtp.gmail.com");
                props.put("mail.smtp.auth", "true");
                
                Session session=Session.getInstance(props,null);
                MimeMessage msg = new MimeMessage(session);
                msg.setFrom(new InternetAddress("Sa7ti Newsletter <news@sa7ti.tn>"));
                msg.setRecipients(Message.RecipientType.TO,"medazizbenhaha@gmail.com");
                msg.setSubject(c.getTitre());
                msg.setSentDate(new Date (System.currentTimeMillis()));
                String text=c.getDescription()+ System.getProperty("line.separator")+c.getContent();
                msg.setText(text);
                
                SMTPTransport st= (SMTPTransport)session.getTransport("smtps");
                st.connect("smtp.gmail",465,Statics.mail,Statics.password);
                st.sendMessage(msg,msg.getAllRecipients());
                
                System.out.println("mail : "+st.getLastServerResponse());
                
                
            } catch (MessagingException ex) {
                //Logger.getLogger(service_article.class.getName()).log(Level.SEVERE, null, ex);
            }
    }
    */
    
    public void send_sms(String content){
    
                 String accountSID = "AC3a73ca0c8090ce228b6e6f7753f0d74f";
String authToken = "033977a42e538d9c4bff6eee53c2a042";
String fromPhone = "+14243611768";
String destinationPhone="+21625713413";
        setTitle("List article");
      Response<Map> result = Rest.post("https://api.twilio.com/2010-04-01/Accounts/" + accountSID + "/Messages.json").
        queryParam("To", destinationPhone).
        queryParam("From", fromPhone).
        queryParam("Body", content).
        basicAuth(accountSID, authToken).getAsJsonMap();
      if(result.getResponseData() != null) {
    String error = (String)result.getResponseData().get("error_message");
    if(error != null) 
        ToastBar.showErrorMessage(error);
    }
    
    
    }
    
	public boolean add(article c) {
		
        String url = Statics.BASE_URL + "/addarticle?titre=" + c.getTitre() +"&description="+c.getDescription()+"&contenu="+c.getContent()+"&type="+c.getActive()+"&categorie_id="+c.getCat_id()+"&vues="+c.getVue()+"&image="+c.getImage();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             
                resultOK = req.getResponseCode() == 200; 
                req.removeResponseListener(this);   
              
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        
    send_sms("Sa7ti NewsLetter"+ System.getProperty("line.separator")+"Go and check what's new !"+c.getTitre());
      // send_mail(c); 
        return resultOK;
		
        
}

public boolean delete(int id) {

	  String url = Statics.BASE_URL + "/deletearticle?id="+id ; 
      req.setUrl(url);
      
      req.addResponseListener(new ActionListener<NetworkEvent>() {
          @Override
          public void actionPerformed(NetworkEvent evt) {
           
              resultOK = req.getResponseCode() == 200; 
              req.removeResponseListener(this);             
          }
      });
      NetworkManager.getInstance().addToQueueAndWait(req);
      return resultOK;

}

public boolean edit(article c) {

	  String url = Statics.BASE_URL + "/updatearticle?id="+c.getId()+"&titre="+c.getTitre()+"&description="+c.getDescription()+"&contenu="+c.getContent()+"&type="+c.getActive()+"&vues="+c.getVue() ; 
    req.setUrl(url);
    
    req.addResponseListener(new ActionListener<NetworkEvent>() {
        @Override
        public void actionPerformed(NetworkEvent evt) {
         
            resultOK = req.getResponseCode() == 200; 
            req.removeResponseListener(this);             
        }
    });
    NetworkManager.getInstance().addToQueueAndWait(req);
    return resultOK;

}


public ArrayList<article> afficherliste(){
	
	ArrayList<article> articles=new ArrayList<>();
	
    String url = Statics.BASE_URL+"/listarticles";
    req.setUrl(url);

    req.addResponseListener(new ActionListener<NetworkEvent>() {
        @Override
        public void actionPerformed(NetworkEvent evt) {
        	 JSONParser jsonp = new JSONParser();
        	 
        	 try {    
				Map<String, Object> articleListJson=jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
		        List<Map<String,Object>> list = (List<Map<String,Object>>) articleListJson.get("root");
		        
		        for(Map<String,Object> obj : list){
		            
		        	article t = new article();
		           
		        	float id = Float.parseFloat(obj.get("id").toString());
		        	String titre=obj.get("titre").toString();
		        	String description=obj.get("description").toString();
		        	String content=obj.get("contenu").toString();
		        	String active=obj.get("type").toString();
		        	String vue=obj.get("vues").toString();
		        	String img=obj.get("image").toString();
		        	
		        	//String categorie=obj.get("categorie").toString();
		        	//System.out.println(vue);
		        	
		        	t.setId((int) id);
		        	t.setTitre(titre);
		        	t.setDescription(description);
		        	t.setContent(content);
		        	t.setActive(active);
		        	t.setVue(vue);
		        	t.setImage(img);
		            
		        	articles.add(t);
		        }
		        
			} catch (IOException e) {
				// TODO Auto-generated catch block
			//	e.printStackTrace();
			};

        }
    });
    NetworkManager.getInstance().addToQueueAndWait(req);

	 return articles;
}


}
