<?php

/* index.html */
class __TwigTemplate_37a968442c22648ceb4a16069820cc5350b97e50f45f26c5442d7c036ad743d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        ";
        // line 20
        if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_questions_);
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 21
            echo "            <div class=\"well\">
                <p>nomor ";
            // line 22
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_question_, "nomor", array()), "html", null, true);
            echo "</p>
                <p>Key 1 ";
            // line 23
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_question_, "key_1", array()), "html", null, true);
            echo "</p>
                <p>Key 2 ";
            // line 24
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_question_, "key_2", array()), "html", null, true);
            echo "</p>
                <p>Key 3 ";
            // line 25
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_question_, "key_3", array()), "html", null, true);
            echo "</p>
                <p>image ";
            // line 26
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_question_, "image", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        <!-- jQuery -->
        <script src=\"//code.jquery.com/jquery.js\"></script>
        <!-- Bootstrap JavaScript -->
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  68 => 26,  63 => 25,  58 => 24,  53 => 23,  48 => 22,  45 => 21,  40 => 20,  19 => 1,);
    }
}
