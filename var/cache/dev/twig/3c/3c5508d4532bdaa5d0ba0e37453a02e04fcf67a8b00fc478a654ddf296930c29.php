<?php

/* alea/toto.html.twig */
class __TwigTemplate_72efffaf990c9dd1d5635d9925cdf840cc2fb0e3d566a17da7e7afa94d361049 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alea/toto.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<!-- Le nom du fichier doit correspondre au chemin indiquer dans le fichier di COntrolleur
ici  return \$this->render('alea/toto.html.twig', --> 

<html>
<head>
<title>Joe Bloggs - Curriculum Vitae</title>

<meta name=\"viewport\" content=\"width=device-width\"/>
<meta name=\"description\" content=\"The Curriculum Vitae of Joe Bloggs.\"/>
<meta charset=\"UTF-8\"> 

<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
</head>
<body id=\"top\">
<div id=\"cv\" class=\"instaFade\">
\t<div class=\"mainDetails\">
\t\t<div id=\"headshot\" class=\"quickFade\">
\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo"), "html", null, true);
        echo ".jpg\" alt=\"Alan Smith\" />
\t\t</div>
\t\t
\t\t<div id=\"name\">
\t\t\t<h1 class=\"quickFade delayTwo\"> ";
        // line 29
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 29, $this->source); })())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nameFamily"]) || array_key_exists("nameFamily", $context) ? $context["nameFamily"] : (function () { throw new Twig_Error_Runtime('Variable "nameFamily" does not exist.', 29, $this->source); })())), "html", null, true);
        echo "</h1>
\t\t\t<h2 class=\"quickFade delayThree\">  ";
        // line 30
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "job Title"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t</div>
\t\t
\t\t<div id=\"contactDetails\" class=\"quickFade delayFour\">
\t\t\t<ul>
\t\t\t\t<li>e: <a href=\"mailto:joe@bloggs.com\" target=\"_blank\">joe@bloggs.com</a></li>
\t\t\t\t<li>w: <a href=\"http://www.bloggs.com\">www.bloggs.com</a></li>
\t\t\t\t<li>m: 01234567890</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"clear\"></div>
\t</div>
\t
\t<div id=\"mainArea\" class=\"quickFade delayFive\">
\t\t<section>
\t\t\t<article>
\t\t\t\t<div class=\"sectionTitle\">
\t\t\t\t\t<h1>Personal Profile</h1>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"sectionContent\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Work Experience</h1>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    
\t\t\t    <ul>
\t\t\t    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
            // line 67
            echo "\t\t\t        <li> 
\t\t\t            <article>
\t\t\t\t\t        <h2>Job Title at Company ";
            // line 69
            echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
            echo "</h2>
\t\t\t\t\t        <p class=\"subDetails\">April 2011 - Present</p>
\t\t\t\t\t        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t        </article>
\t\t\t        </li>
\t\t\t     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t     </ul>
\t\t\t    <!--
\t\t\t\t<article>
\t\t\t\t\t<h2>Job Title at Company</h2>
\t\t\t\t\t<p class=\"subDetails\">April 2011 - Present</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t</article>
\t\t\t\t
\t\t\t\t<article>
\t\t\t\t\t<h2>Job Title at Company</h2>
\t\t\t\t\t<p class=\"subDetails\">Janruary 2007 - March 2011</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t</article>
\t\t\t\t
\t\t\t\t<article>
\t\t\t\t\t<h2>Job Title at Company</h2>
\t\t\t\t\t<p class=\"subDetails\">October 2004 - December 2006</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t</article>
\t\t\t\t-->
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t<!-- Section Formations-->
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Formations</h1><br/>
\t\t\t\t";
        // line 104
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 105
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_formationType");
            echo "\" >New</a>
\t\t\t\t";
        }
        // line 107
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    <ul>
\t            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new Twig_Error_Runtime('Variable "formations" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 112
            echo "\t                <li>
\t\t\t            <article>
\t\t\t\t\t        <h2>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getName", [], "method"), "html", null, true);
            echo "</h2>
\t\t\t\t\t        <p class=\"subDetails\">";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getdebut", [], "method"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getfin", [], "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t        <p>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "getContenu", [], "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t        ";
            // line 117
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 118
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "getId", [], "method")]), "html", null, true);
                echo "\" >edit</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "getId", [], "method")]), "html", null, true);
                echo "\" >delete</a>\t
\t\t\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t        </article>
\t                </li>
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t     </ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t<section>
\t\t
\t\t
\t\t\t\t<!-- Section Experiences-->
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Experiences</h1><br/>
\t\t\t\t";
        // line 135
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 136
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_experienceType");
            echo "\" >New</a>
\t\t\t\t";
        }
        // line 138
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    
\t\t\t    <ul>
\t            ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiences"]) || array_key_exists("experiences", $context) ? $context["experiences"] : (function () { throw new Twig_Error_Runtime('Variable "experiences" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 144
            echo "\t                <li>
\t\t\t            <article>
\t\t\t\t\t        <h2>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "getName", [], "method"), "html", null, true);
            echo "</h2>
\t\t\t\t\t        <p class=\"subDetails\">";
            // line 147
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "getDebut", [], "method"), "d-m-y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "getFin", [], "method"), "d-m-y"), "html", null, true);
            echo "</p>
\t\t\t\t\t        <p>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "getDomaine", [], "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t        <p>";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "getEntreprise", [], "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t        ";
            // line 150
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 151
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_experience", ["id" => twig_get_attribute($this->env, $this->source, $context["experience"], "getId", [], "method")]), "html", null, true);
                echo "\" >edit</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_experience", ["id" => twig_get_attribute($this->env, $this->source, $context["experience"], "getId", [], "method")]), "html", null, true);
                echo "\" >delete</a>
\t\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t        </article>
\t                </li>
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "\t\t\t     </ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t<!-- Loisir -->
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Loisirs</h1> <br/>
\t\t\t\t";
        // line 166
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 167
            echo "\t\t\t    \t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_loisirType");
            echo "\" >New</a>
\t\t\t    ";
        }
        // line 169
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    
\t\t\t    <ul>
\t            ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loisirs"]) || array_key_exists("loisirs", $context) ? $context["loisirs"] : (function () { throw new Twig_Error_Runtime('Variable "loisirs" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["loisir"]) {
            // line 175
            echo "\t                <li>
\t\t\t            <article>
\t\t\t\t\t        <h2>";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loisir"], "getName", [], "method"), "html", null, true);
            echo "</h2>
\t\t\t\t\t        <p>";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loisir"], "getCategory", [], "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t        <p>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loisir"], "getCompetencesQueCaTApportes", [], "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t        ";
            // line 180
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 181
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_loisir", ["id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "getId", [], "method")]), "html", null, true);
                echo "\" >edit</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_loisir", ["id" => twig_get_attribute($this->env, $this->source, $context["loisir"], "getId", [], "method")]), "html", null, true);
                echo "\" >delete</a>
\t\t\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t        </article>
\t                </li>
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loisir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t\t\t     </ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t<!--Section Contacts -->
\t\t
\t\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Contacts</h1><br/>
\t\t\t</div>
\t\t\t<!--<a href='https://tpsymphony-nat569.c9users.io/symfony/public/index.php/contact/' target =\"_blank\">Gerer les contacts</a>-->
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    
\t\t\t    <ul>
\t\t\t    \t";
        // line 203
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 204
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
            echo "\" >Laisser un message</a>
\t\t\t\t";
        }
        // line 206
        echo "\t\t\t     </ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t
\t\t
\t\t
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Key Skills</h1>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t\t<ul class=\"keySkills\">
\t\t\t\t    
\t\t\t\t    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["iterateur"]) {
            // line 223
            echo "\t\t\t        <li>A Key Skill ";
            echo twig_escape_filter($this->env, $context["iterateur"], "html", null, true);
            echo " </li>
\t\t\t     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iterateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
\t\t\t\t    <!--
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t-->
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Education</h1>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t\t<article>
\t\t\t\t\t<h2>College/University</h2>
\t\t\t\t\t<p class=\"subDetails\">Qualification</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
\t\t\t\t</article>
\t\t\t\t
\t\t\t\t<article>
\t\t\t\t\t<h2>College/University</h2>
\t\t\t\t\t<p class=\"subDetails\">Qualification</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
\t\t\t\t</article>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t</div>
</div>
<script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
var pageTracker = _gat._getTracker(\"UA-3753241-1\");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "alea/toto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 225,  404 => 223,  400 => 222,  382 => 206,  376 => 204,  374 => 203,  356 => 187,  348 => 184,  343 => 182,  338 => 181,  336 => 180,  332 => 179,  328 => 178,  324 => 177,  320 => 175,  316 => 174,  309 => 169,  303 => 167,  301 => 166,  290 => 157,  282 => 154,  277 => 152,  272 => 151,  270 => 150,  266 => 149,  262 => 148,  256 => 147,  252 => 146,  248 => 144,  244 => 143,  237 => 138,  231 => 136,  229 => 135,  216 => 124,  208 => 121,  203 => 119,  198 => 118,  196 => 117,  192 => 116,  186 => 115,  182 => 114,  178 => 112,  174 => 111,  168 => 107,  162 => 105,  160 => 104,  129 => 75,  117 => 69,  113 => 67,  109 => 66,  68 => 30,  62 => 29,  55 => 25,  41 => 14,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<!-- Le nom du fichier doit correspondre au chemin indiquer dans le fichier di COntrolleur
ici  return \$this->render('alea/toto.html.twig', --> 

<html>
<head>
<title>Joe Bloggs - Curriculum Vitae</title>

<meta name=\"viewport\" content=\"width=device-width\"/>
<meta name=\"description\" content=\"The Curriculum Vitae of Joe Bloggs.\"/>
<meta charset=\"UTF-8\"> 

<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
</head>
<body id=\"top\">
<div id=\"cv\" class=\"instaFade\">
\t<div class=\"mainDetails\">
\t\t<div id=\"headshot\" class=\"quickFade\">
\t\t\t<img src=\"{{ asset('images/photo') }}.jpg\" alt=\"Alan Smith\" />
\t\t</div>
\t\t
\t\t<div id=\"name\">
\t\t\t<h1 class=\"quickFade delayTwo\"> {{ name |capitalize}} {{ nameFamily |upper }}</h1>
\t\t\t<h2 class=\"quickFade delayThree\">  {{ \"job Title\"|capitalize }} {{ number }}</h2>
\t\t</div>
\t\t
\t\t<div id=\"contactDetails\" class=\"quickFade delayFour\">
\t\t\t<ul>
\t\t\t\t<li>e: <a href=\"mailto:joe@bloggs.com\" target=\"_blank\">joe@bloggs.com</a></li>
\t\t\t\t<li>w: <a href=\"http://www.bloggs.com\">www.bloggs.com</a></li>
\t\t\t\t<li>m: 01234567890</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"clear\"></div>
\t</div>
\t
\t<div id=\"mainArea\" class=\"quickFade delayFive\">
\t\t<section>
\t\t\t<article>
\t\t\t\t<div class=\"sectionTitle\">
\t\t\t\t\t<h1>Personal Profile</h1>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"sectionContent\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Work Experience</h1>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    
\t\t\t    <ul>
\t\t\t    {% for variable in 0..2 %}
\t\t\t        <li> 
\t\t\t            <article>
\t\t\t\t\t        <h2>Job Title at Company {{variable}}</h2>
\t\t\t\t\t        <p class=\"subDetails\">April 2011 - Present</p>
\t\t\t\t\t        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t        </article>
\t\t\t        </li>
\t\t\t     {% endfor %}
\t\t\t     </ul>
\t\t\t    <!--
\t\t\t\t<article>
\t\t\t\t\t<h2>Job Title at Company</h2>
\t\t\t\t\t<p class=\"subDetails\">April 2011 - Present</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t</article>
\t\t\t\t
\t\t\t\t<article>
\t\t\t\t\t<h2>Job Title at Company</h2>
\t\t\t\t\t<p class=\"subDetails\">Janruary 2007 - March 2011</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t</article>
\t\t\t\t
\t\t\t\t<article>
\t\t\t\t\t<h2>Job Title at Company</h2>
\t\t\t\t\t<p class=\"subDetails\">October 2004 - December 2006</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
\t\t\t\t</article>
\t\t\t\t-->
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t<!-- Section Formations-->
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Formations</h1><br/>
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<a href=\"{{ path('app_create_formationType') }}\" >New</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    <ul>
\t            {% for formation in formations %}
\t                <li>
\t\t\t            <article>
\t\t\t\t\t        <h2>{{ formation.getName () }}</h2>
\t\t\t\t\t        <p class=\"subDetails\">{{ formation.getdebut () }} - {{ formation.getfin () }}</p>
\t\t\t\t\t        <p>{{ formation.getContenu () }}</p>
\t\t\t\t\t        {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_formation', {id:formation.getId()}) }}\" >edit</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('delete_formation', {id:formation.getId()}) }}\" >delete</a>\t
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t        </article>
\t                </li>
\t            {% endfor %}
\t\t\t     </ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t<section>
\t\t
\t\t
\t\t\t\t<!-- Section Experiences-->
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Experiences</h1><br/>
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<a href=\"{{ path('app_create_experienceType') }}\" >New</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    
\t\t\t    <ul>
\t            {% for experience in experiences %}
\t                <li>
\t\t\t            <article>
\t\t\t\t\t        <h2>{{ experience.getName () }}</h2>
\t\t\t\t\t        <p class=\"subDetails\">{{ experience.getDebut() |date('d-m-y') }} - {{ experience.getFin() |date('d-m-y') }}</p>
\t\t\t\t\t        <p>{{ experience.getDomaine() }}</p>
\t\t\t\t\t        <p>{{ experience.getEntreprise()}}</p>
\t\t\t\t\t        {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_experience', {id:experience.getId()}) }}\" >edit</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('delete_experience', {id:experience.getId()}) }}\" >delete</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t        </article>
\t                </li>
\t            {% endfor %}
\t\t\t     </ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t<!-- Loisir -->
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Loisirs</h1> <br/>
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t    \t<a href=\"{{ path('app_create_loisirType') }}\" >New</a>
\t\t\t    {% endif %}
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    
\t\t\t    <ul>
\t            {% for loisir in loisirs %}
\t                <li>
\t\t\t            <article>
\t\t\t\t\t        <h2>{{ loisir.getName () }}</h2>
\t\t\t\t\t        <p>{{ loisir.getCategory() }}</p>
\t\t\t\t\t        <p>{{ loisir.getCompetencesQueCaTApportes()}}</p>
\t\t\t\t\t        {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_loisir', {id:loisir.getId()}) }}\" >edit</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('delete_loisir', {id:loisir.getId()}) }}\" >delete</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t        </article>
\t                </li>
\t            {% endfor %}
\t\t\t     </ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t<!--Section Contacts -->
\t\t
\t\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Contacts</h1><br/>
\t\t\t</div>
\t\t\t<!--<a href='https://tpsymphony-nat569.c9users.io/symfony/public/index.php/contact/' target =\"_blank\">Gerer les contacts</a>-->
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t    
\t\t\t    <ul>
\t\t\t    \t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<a href=\"{{ path('contact_new') }}\" >Laisser un message</a>
\t\t\t\t{% endif %}
\t\t\t     </ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t
\t\t
\t\t
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Key Skills</h1>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t\t<ul class=\"keySkills\">
\t\t\t\t    
\t\t\t\t    {% for iterateur in 0..7 %}
\t\t\t        <li>A Key Skill {{iterateur}} </li>
\t\t\t     {% endfor %}

\t\t\t\t    <!--
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t<li>A Key Skill</li>
\t\t\t\t\t-->
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t\t
\t\t<section>
\t\t\t<div class=\"sectionTitle\">
\t\t\t\t<h1>Education</h1>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"sectionContent\">
\t\t\t\t<article>
\t\t\t\t\t<h2>College/University</h2>
\t\t\t\t\t<p class=\"subDetails\">Qualification</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
\t\t\t\t</article>
\t\t\t\t
\t\t\t\t<article>
\t\t\t\t\t<h2>College/University</h2>
\t\t\t\t\t<p class=\"subDetails\">Qualification</p>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
\t\t\t\t</article>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</section>
\t\t
\t</div>
</div>
<script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
var pageTracker = _gat._getTracker(\"UA-3753241-1\");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>

", "alea/toto.html.twig", "/home/ubuntu/workspace/symfony/templates/alea/toto.html.twig");
    }
}
