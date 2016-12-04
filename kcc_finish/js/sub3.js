for(var $y=1950; $y<=2016; $y++){
    $(".year").append("<option value='"+$y+"'>"+$y+"</option>");
}
    
for(var $m=1; $m<=12; $m++){
    $(".mot").append("<option value='"+$m+"'>"+$m+"</option>");
}
    
for(var $d=1; $d<=31; $d++){
    $(".day").append("<option value='"+$d+"'>"+$d+"</option>");
}
for(var $y_w=1950; $y_w<=2016; $y_w++){
    $(".year_wed").append("<option value='"+$y_w+"'>"+$y_w+"</option>");
}
    
for(var $m_w=1; $m_w<=12; $m_w++){
    $(".mot_wed").append("<option value='"+$m_w+"'>"+$m_w+"</option>");
}
    
for(var $d_w=1; $d_w<=31; $d_w++){
    $(".day_wed").append("<option value='"+$d_w+"'>"+$d_w+"</option>");
}