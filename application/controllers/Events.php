<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Controller
{
  
   public function recent_event_dynamic_link($event_id=0)
   {
      if($event_id > 0){
         $data["event"] = $event = $this->mod->select("events", "*", ["id"=>$event_id])->row();
         $meta = $this->mod->select("routes", "meta_title,meta_keyword,meta_description", ["routers_link"=>$event->routers_link], "route_id")->row();
         $meta_data = ["meta_title"=>$meta->meta_title, "meta_keyword"=>$meta->meta_keyword, "meta_description"=>$meta->meta_description];
         active_nav("campus-life", "events");
         $this->lib->header($meta_data);
         $pageData["pageHeader"] = (object)[
            "title" => "Inner Event",
            "breadcrumb" => ["campus life", "Inner Event"]
         ];
         $this->load->view('web/common/breadcrumb', $pageData);
         $this->load->view('web/pages/campus/event-details', $data);
         $this->load->view('web/pages-scripts/common-script');
         $this->load->view('web/pages-scripts/fancybox');
         $this->lib->footer();
      }
   }

}
