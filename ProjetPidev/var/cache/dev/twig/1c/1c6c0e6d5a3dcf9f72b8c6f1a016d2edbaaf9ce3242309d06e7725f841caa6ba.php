<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* post_front/listPost.html.twig */
class __TwigTemplate_0c787d416a2d2b7cb1bb0daccba3d49580eefa768af50147e42a4f7e1e6e84a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_front/listPost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post_front/listPost.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "post_front/listPost.html.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"search-bar p-0 d-none d-md-block ms-2\">
    <div id=\"search\" class=\"menu-search mb-0\">
        <form action=\"#\" method=\"get\">
            <div class=\"input-group\">
                <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                <input class=\"form-control\" id=\"system-search\" name=\"q\" placeholder=\"Recherche\" required>
                <span class=\"input-group-btn\">
                                          <button type=\"submit\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-search\"></i></button>
                                            </span>
            </div>


        </form>
    </div>
</div>
<div class=\"title_right\">
    <div class=\"col-md-5 col-sm-5   form-group pull-right top_search\">
        <div class=\"input-group\">
                                        <span class=\"input-group-btn\">
                    </span>
        </div>
    </div>
</div>





<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Posts </h1>
        <div class=\"col-sm-8\"></div>

        <div class=\"col-sm-4\"><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Post</a></div>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">


        <div class=\"rows\">
            <div class=\"form-group\"> \t<!--\t\tShow Numbers Of Rows \t\t-->
                <select style=\"width: 20%;\" class  =\"form-control\" name=\"state\" id=\"maxRows\">


                    <option value=\"50\">Tout</option>
                    <option value=\"2\">2</option>
                    <option value=\"3\">3</option>
                    <option value=\"4\">4</option>

                    <option value=\"5\">5</option>
                </select>
            </div>
        </div>



        <table id=\"table_id\" class=\"table table-list-search\">
            <thead>




            <tr>
                <th>Id Post</th>
                <th>Titre Post</th>
                <th>Texte Post</th>
                <th>Date Post</th>
                <th>Id Uilisateur Post</th>
                <th>Categorie Post Id</th>


                <th>Modifier Post</th>
                <th>Supprimer Post</th>




            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Post"]) || array_key_exists("Post", $context) ? $context["Post"] : (function () { throw new RuntimeError('Variable "Post" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo ">
                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomCategoriePost", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatePost", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                <td><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Supp", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>



            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo ">




            </tbody>

        </table>



        <!--\t\tStart Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class=\"pagination\">
                    <!--\tHere the JS Function Will Add the Rows -->
                </ul>
            </nav>
        </div>
        <div class=\"rows_count\"></div>

    </div>
</div>
<!-- End of Container -->



</div>
<!-- /.box-body -->
</div>


<!-- Load jQuery from Google's CDN if needed -->
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\"></script>






<script>
    \$(document).ready(function() {
        var activeSystemClass = \$('.list-group-item.active');

        //something is entered in search form
        \$('#system-search').keyup( function() {
            var that = this;
            // affect all table rows on in systems table
            var tableBody = \$('.table-list-search tbody');
            var tableRowsClass = \$('.table-list-search tbody tr');
            \$('.search-sf').remove();
            tableRowsClass.each( function(i, val) {

                //Lower text for case insensitive
                var rowText = \$(val).text().toLowerCase();
                var inputText = \$(that).val().toLowerCase();
                if(inputText != '')
                {
                    \$('.search-query-sf').remove();
                    tableBody.prepend('<tr class=\"search-query-sf\"><strong>Searching for: \"'
                        + \$(that).val()
                        + '\"</strong></tr>');
                }
                else
                {
                    \$('.search-query-sf').remove();
                }

                if( rowText.indexOf( inputText ) == -1 )
                {
                    //hide rows
                    tableRowsClass.eq(i).hide();

                }
                else
                {
                    \$('.search-sf').remove();
                    tableRowsClass.eq(i).show();
                }
            });
            //all tr elements are hidden
            if(tableRowsClass.children(':visible').length == 0)
            {
                tableBody.append('<td class=\"search-sf\">Aucun resultat.</td>');
            }
        });
    });

</script>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    //PAgination and show entries rows metiers (deux metiers)
    getPagination('#table-id');
    \$('#maxRows').trigger('change');
    function getPagination (table){
        \$('#maxRows').on('change',function(){
            \$('.pagination').html('');\t\t\t\t\t\t// reset pagination div
            var trnum = 0 ;\t\t\t\t\t\t\t\t\t// reset tr counter
            var maxRows = parseInt(\$(this).val());\t\t\t// get Max Rows from select option
            var totalRows = \$(table+' tbody tr').length;\t\t// numbers of rows
            \$(table+' tr:gt(0)').each(function(){\t\t\t// each TR in  table and not the header
                trnum++;\t\t\t\t\t\t\t\t\t// Start Counter
                if (trnum > maxRows ){\t\t\t\t\t\t// if tr number gt maxRows
                    \$(this).hide();\t\t\t\t\t\t\t// fade it out
                }if (trnum <= maxRows ){\$(this).show();}// else fade in Important in case if it ..
            });\t\t\t\t\t\t\t\t\t\t\t//  was fade out to fade it in
            if (totalRows > maxRows){\t\t\t\t\t\t// if tr total rows gt max rows option
                var pagenum = Math.ceil(totalRows/maxRows);\t// ceil total(rows/maxrows) to get ..
                //\tnumbers of pages
                for (var i = 1; i <= pagenum ;){\t\t\t// for each page append pagination li
                    \$('.pagination').append('<li style=\"color: black;floa\" data-page=\"'+i+'\">\\
\t\t\t\t\t\t\t\t      <span style=\"     box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1)\">'+ i++ +'<span class=\"sr-only\">(current)</span></span>\\
\t\t\t\t\t\t\t\t    </li>').show();
                }\t\t\t\t\t\t\t\t\t\t\t// end for i
            } \t\t\t\t\t\t\t\t\t\t\t\t// end if row count > max rows
            \$('.pagination li:first-child').addClass('active'); // add active class to the first li
            //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
            showig_rows_count(maxRows, 1, totalRows);
            //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
            \$('.pagination li').on('click',function(e){\t\t// on click each page
                e.preventDefault();
                var pageNum = \$(this).attr('data-page');\t// get it's number
                var trIndex = 0 ;\t\t\t\t\t\t\t// reset tr counter
                \$('.pagination li').removeClass('active');\t// remove active class from all li
                \$(this).addClass('active');\t\t\t\t\t// add active class to the clicked
                //SHOWING ROWS NUMBER OUT OF TOTAL
                showig_rows_count(maxRows, pageNum, totalRows);
                //SHOWING ROWS NUMBER OUT OF TOTAL
                \$(table+' tr:gt(0)').each(function(){\t\t// each tr in table not the header
                    trIndex++;\t\t\t\t\t\t\t\t// tr index counter
                    // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                    if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                        \$(this).hide();
                    }else {\$(this).show();} \t\t\t\t//else fade in
                }); \t\t\t\t\t\t\t\t\t\t// end of for each tr in table
            });\t\t\t\t\t\t\t\t\t\t// end of on click pagination list
        });
        // end of on select change
        // END OF PAGINATION
    }
    //ROWS SHOWING FUNCTION
    function showig_rows_count(maxRows, pageNum, totalRows) {
        //Default rows showing
        var end_index = maxRows*pageNum;
        var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
        var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';
        \$('.rows_count').html(string);
    }
    // // CREATING INDEX
    // function default_index() {
    //     \$('table tr:eq(0)').prepend('<th> <Objet></Objet> </th>')
    //
    //     var id = 0;
    //
    //     \$('table tr:gt(0)').each(function(){
    //         id++
    //         \$(this).prepend('<td>'+id+'</td>');
    //     });
    // }
    // All Table search script
    function FilterkeyWord_all_table() {
// Count td if you want to search on all table instead of specific column
        var count = \$('.table').children('tbody').children('tr:first-child').children('td').length;
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById(\"search_input_all\");
        var input_value =     document.getElementById(\"search_input_all\").value;
        filter = input.value.toLowerCase();
        if(input_value !=''){
            table = document.getElementById(\"table-id\");
            tr = table.getElementsByTagName(\"tr\");
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 1; i < tr.length; i++) {
                var flag = 0;
                for(j = 0; j < count; j++){
                    td = tr[i].getElementsByTagName(\"td\")[j];
                    if (td) {
                        var td_text = td.innerHTML;
                        if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                            //var td_text = td.innerHTML;
                            //td.innerHTML = 'shaban';
                            flag = 1;
                        } else {
                            //DO NOTHING
                        }
                    }
                }
                if(flag==1){
                    tr[i].style.display = \"\";
                }else {
                    tr[i].style.display = \"none\";
                }
            }
        }else {
            //RESET TABLE
            \$('#maxRows').trigger('change');
        }
    }
</script>








";
        // line 306
        $this->loadTemplate("temp2.html.twig", "post_front/listPost.html.twig", 306)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "post_front/listPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 306,  163 => 94,  152 => 90,  148 => 89,  144 => 88,  140 => 87,  134 => 86,  82 => 37,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}


<div class=\"search-bar p-0 d-none d-md-block ms-2\">
    <div id=\"search\" class=\"menu-search mb-0\">
        <form action=\"#\" method=\"get\">
            <div class=\"input-group\">
                <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                <input class=\"form-control\" id=\"system-search\" name=\"q\" placeholder=\"Recherche\" required>
                <span class=\"input-group-btn\">
                                          <button type=\"submit\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-search\"></i></button>
                                            </span>
            </div>


        </form>
    </div>
</div>
<div class=\"title_right\">
    <div class=\"col-md-5 col-sm-5   form-group pull-right top_search\">
        <div class=\"input-group\">
                                        <span class=\"input-group-btn\">
                    </span>
        </div>
    </div>
</div>





<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Posts </h1>
        <div class=\"col-sm-8\"></div>

        <div class=\"col-sm-4\"><a href=\"{{ path('add') }}\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Post</a></div>


    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">


        <div class=\"rows\">
            <div class=\"form-group\"> \t<!--\t\tShow Numbers Of Rows \t\t-->
                <select style=\"width: 20%;\" class  =\"form-control\" name=\"state\" id=\"maxRows\">


                    <option value=\"50\">Tout</option>
                    <option value=\"2\">2</option>
                    <option value=\"3\">3</option>
                    <option value=\"4\">4</option>

                    <option value=\"5\">5</option>
                </select>
            </div>
        </div>



        <table id=\"table_id\" class=\"table table-list-search\">
            <thead>




            <tr>
                <th>Id Post</th>
                <th>Titre Post</th>
                <th>Texte Post</th>
                <th>Date Post</th>
                <th>Id Uilisateur Post</th>
                <th>Categorie Post Id</th>


                <th>Modifier Post</th>
                <th>Supprimer Post</th>




            </tr>
            </thead>
            <tbody>
            <tr {% for c in Post %}>
                <td>{{ c.id }}</td>
                <td>{{ c.nomCategoriePost }}</td>
                <td><a href=\"{{ path(\"updatePost\",{'id':c.id}) }}\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                <td><a href=\"{{ path(\"Supp\",{'id':c.id}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>



            </tr {% endfor %}>




            </tbody>

        </table>



        <!--\t\tStart Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class=\"pagination\">
                    <!--\tHere the JS Function Will Add the Rows -->
                </ul>
            </nav>
        </div>
        <div class=\"rows_count\"></div>

    </div>
</div>
<!-- End of Container -->



</div>
<!-- /.box-body -->
</div>


<!-- Load jQuery from Google's CDN if needed -->
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\"></script>






<script>
    \$(document).ready(function() {
        var activeSystemClass = \$('.list-group-item.active');

        //something is entered in search form
        \$('#system-search').keyup( function() {
            var that = this;
            // affect all table rows on in systems table
            var tableBody = \$('.table-list-search tbody');
            var tableRowsClass = \$('.table-list-search tbody tr');
            \$('.search-sf').remove();
            tableRowsClass.each( function(i, val) {

                //Lower text for case insensitive
                var rowText = \$(val).text().toLowerCase();
                var inputText = \$(that).val().toLowerCase();
                if(inputText != '')
                {
                    \$('.search-query-sf').remove();
                    tableBody.prepend('<tr class=\"search-query-sf\"><strong>Searching for: \"'
                        + \$(that).val()
                        + '\"</strong></tr>');
                }
                else
                {
                    \$('.search-query-sf').remove();
                }

                if( rowText.indexOf( inputText ) == -1 )
                {
                    //hide rows
                    tableRowsClass.eq(i).hide();

                }
                else
                {
                    \$('.search-sf').remove();
                    tableRowsClass.eq(i).show();
                }
            });
            //all tr elements are hidden
            if(tableRowsClass.children(':visible').length == 0)
            {
                tableBody.append('<td class=\"search-sf\">Aucun resultat.</td>');
            }
        });
    });

</script>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script>
    //PAgination and show entries rows metiers (deux metiers)
    getPagination('#table-id');
    \$('#maxRows').trigger('change');
    function getPagination (table){
        \$('#maxRows').on('change',function(){
            \$('.pagination').html('');\t\t\t\t\t\t// reset pagination div
            var trnum = 0 ;\t\t\t\t\t\t\t\t\t// reset tr counter
            var maxRows = parseInt(\$(this).val());\t\t\t// get Max Rows from select option
            var totalRows = \$(table+' tbody tr').length;\t\t// numbers of rows
            \$(table+' tr:gt(0)').each(function(){\t\t\t// each TR in  table and not the header
                trnum++;\t\t\t\t\t\t\t\t\t// Start Counter
                if (trnum > maxRows ){\t\t\t\t\t\t// if tr number gt maxRows
                    \$(this).hide();\t\t\t\t\t\t\t// fade it out
                }if (trnum <= maxRows ){\$(this).show();}// else fade in Important in case if it ..
            });\t\t\t\t\t\t\t\t\t\t\t//  was fade out to fade it in
            if (totalRows > maxRows){\t\t\t\t\t\t// if tr total rows gt max rows option
                var pagenum = Math.ceil(totalRows/maxRows);\t// ceil total(rows/maxrows) to get ..
                //\tnumbers of pages
                for (var i = 1; i <= pagenum ;){\t\t\t// for each page append pagination li
                    \$('.pagination').append('<li style=\"color: black;floa\" data-page=\"'+i+'\">\\
\t\t\t\t\t\t\t\t      <span style=\"     box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1)\">'+ i++ +'<span class=\"sr-only\">(current)</span></span>\\
\t\t\t\t\t\t\t\t    </li>').show();
                }\t\t\t\t\t\t\t\t\t\t\t// end for i
            } \t\t\t\t\t\t\t\t\t\t\t\t// end if row count > max rows
            \$('.pagination li:first-child').addClass('active'); // add active class to the first li
            //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
            showig_rows_count(maxRows, 1, totalRows);
            //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
            \$('.pagination li').on('click',function(e){\t\t// on click each page
                e.preventDefault();
                var pageNum = \$(this).attr('data-page');\t// get it's number
                var trIndex = 0 ;\t\t\t\t\t\t\t// reset tr counter
                \$('.pagination li').removeClass('active');\t// remove active class from all li
                \$(this).addClass('active');\t\t\t\t\t// add active class to the clicked
                //SHOWING ROWS NUMBER OUT OF TOTAL
                showig_rows_count(maxRows, pageNum, totalRows);
                //SHOWING ROWS NUMBER OUT OF TOTAL
                \$(table+' tr:gt(0)').each(function(){\t\t// each tr in table not the header
                    trIndex++;\t\t\t\t\t\t\t\t// tr index counter
                    // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                    if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                        \$(this).hide();
                    }else {\$(this).show();} \t\t\t\t//else fade in
                }); \t\t\t\t\t\t\t\t\t\t// end of for each tr in table
            });\t\t\t\t\t\t\t\t\t\t// end of on click pagination list
        });
        // end of on select change
        // END OF PAGINATION
    }
    //ROWS SHOWING FUNCTION
    function showig_rows_count(maxRows, pageNum, totalRows) {
        //Default rows showing
        var end_index = maxRows*pageNum;
        var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
        var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';
        \$('.rows_count').html(string);
    }
    // // CREATING INDEX
    // function default_index() {
    //     \$('table tr:eq(0)').prepend('<th> <Objet></Objet> </th>')
    //
    //     var id = 0;
    //
    //     \$('table tr:gt(0)').each(function(){
    //         id++
    //         \$(this).prepend('<td>'+id+'</td>');
    //     });
    // }
    // All Table search script
    function FilterkeyWord_all_table() {
// Count td if you want to search on all table instead of specific column
        var count = \$('.table').children('tbody').children('tr:first-child').children('td').length;
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById(\"search_input_all\");
        var input_value =     document.getElementById(\"search_input_all\").value;
        filter = input.value.toLowerCase();
        if(input_value !=''){
            table = document.getElementById(\"table-id\");
            tr = table.getElementsByTagName(\"tr\");
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 1; i < tr.length; i++) {
                var flag = 0;
                for(j = 0; j < count; j++){
                    td = tr[i].getElementsByTagName(\"td\")[j];
                    if (td) {
                        var td_text = td.innerHTML;
                        if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                            //var td_text = td.innerHTML;
                            //td.innerHTML = 'shaban';
                            flag = 1;
                        } else {
                            //DO NOTHING
                        }
                    }
                }
                if(flag==1){
                    tr[i].style.display = \"\";
                }else {
                    tr[i].style.display = \"none\";
                }
            }
        }else {
            //RESET TABLE
            \$('#maxRows').trigger('change');
        }
    }
</script>








{% include 'temp2.html.twig' %}
", "post_front/listPost.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\post_front\\listPost.html.twig");
    }
}
