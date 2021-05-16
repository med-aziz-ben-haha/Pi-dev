/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.messaging;

import com.codename1.messaging.Message;
import com.codename1.ui.Display;

/**
 *
 * @author Ennaifer Khalil
 */
public class msgForm extends Object {
    Message m;
  

    public msgForm() {
        this.m = new Message("Body of message");
        Display.getInstance().sendMessage(new String[] {"khalil.ennaifer@esprit.tn"}, "Subject of message", m);
    }
   
}
