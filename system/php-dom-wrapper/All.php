<?php
/* This library was intended to be used with a class autoloader. Since
 * we don't use one, this just requires all of its files explicitly.
 */

require_once("Traits/TraversalTrait.php");
require_once("Traits/ManipulationTrait.php");
require_once("Traits/NodeTrait.php");
require_once("Traits/CommonTrait.php");
require_once("Collections/NodeCollection.php");
require_once("Element.php");
require_once("DocumentType.php");
require_once("All.php");
require_once("ProcessingInstruction.php");
require_once("Comment.php");
require_once("NodeList.php");
require_once("Text.php");
require_once("Document.php");
require_once("CssSelector/Node/NodeInterface.php");
require_once("CssSelector/Node/AbstractNode.php");
require_once("CssSelector/Node/ElementNode.php");
require_once("CssSelector/Node/ClassNode.php");
require_once("CssSelector/Node/NegationNode.php");
require_once("CssSelector/Node/SelectorNode.php");
require_once("CssSelector/Node/FunctionNode.php");
require_once("CssSelector/Node/CombinedSelectorNode.php");
require_once("CssSelector/Node/AttributeNode.php");
require_once("CssSelector/Node/HashNode.php");
require_once("CssSelector/Node/PseudoNode.php");
require_once("CssSelector/Node/Specificity.php");
require_once("CssSelector/CssSelector.php");
require_once("CssSelector/CssSelectorConverter.php");
require_once("CssSelector/XPath/Extension/ExtensionInterface.php");
require_once("CssSelector/XPath/Extension/AbstractExtension.php");
require_once("CssSelector/XPath/Extension/NodeExtension.php");
require_once("CssSelector/XPath/Extension/HtmlExtension.php");
require_once("CssSelector/XPath/Extension/PseudoClassExtension.php");
require_once("CssSelector/XPath/Extension/CombinationExtension.php");
require_once("CssSelector/XPath/Extension/AttributeMatchingExtension.php");
require_once("CssSelector/XPath/Extension/FunctionExtension.php");
require_once("CssSelector/XPath/TranslatorInterface.php");
require_once("CssSelector/XPath/XPathExpr.php");
require_once("CssSelector/XPath/Translator.php");
require_once("CssSelector/Exception/ExceptionInterface.php");
require_once("CssSelector/Exception/ParseException.php");
require_once("CssSelector/Exception/InternalErrorException.php");
require_once("CssSelector/Exception/SyntaxErrorException.php");
require_once("CssSelector/Exception/ExpressionErrorException.php");
require_once("CssSelector/Parser/ParserInterface.php");
require_once("CssSelector/Parser/Shortcut/ElementParser.php");
require_once("CssSelector/Parser/Shortcut/EmptyStringParser.php");
require_once("CssSelector/Parser/Shortcut/HashParser.php");
require_once("CssSelector/Parser/Shortcut/ClassParser.php");
require_once("CssSelector/Parser/Parser.php");
require_once("CssSelector/Parser/TokenStream.php");
require_once("CssSelector/Parser/Token.php");
require_once("CssSelector/Parser/Handler/HandlerInterface.php");
require_once("CssSelector/Parser/Handler/HashHandler.php");
require_once("CssSelector/Parser/Handler/WhitespaceHandler.php");
require_once("CssSelector/Parser/Handler/IdentifierHandler.php");
require_once("CssSelector/Parser/Handler/StringHandler.php");
require_once("CssSelector/Parser/Handler/CommentHandler.php");
require_once("CssSelector/Parser/Handler/NumberHandler.php");
require_once("CssSelector/Parser/Reader.php");
require_once("CssSelector/Parser/Tokenizer/TokenizerEscaping.php");
require_once("CssSelector/Parser/Tokenizer/TokenizerPatterns.php");
require_once("CssSelector/Parser/Tokenizer/Tokenizer.php");
