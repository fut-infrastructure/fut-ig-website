<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile QuestionnaireResponse
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:QuestionnaireResponse</sch:title>
    <sch:rule context="f:QuestionnaireResponse">
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare']) &gt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:basedOn) &gt;= 1">basedOn: minimum cardinality of 'basedOn' is 1</sch:assert>
      <sch:assert test="count(f:basedOn) &lt;= 1">basedOn: maximum cardinality of 'basedOn' is 1</sch:assert>
      <sch:assert test="count(f:partOf) &lt;= 1">partOf: maximum cardinality of 'partOf' is 1</sch:assert>
      <sch:assert test="count(f:questionnaire) &gt;= 1">questionnaire: minimum cardinality of 'questionnaire' is 1</sch:assert>
      <sch:assert test="count(f:subject) &gt;= 1">subject: minimum cardinality of 'subject' is 1</sch:assert>
      <sch:assert test="count(f:authored) &gt;= 1">authored: minimum cardinality of 'authored' is 1</sch:assert>
      <sch:assert test="count(f:source) &gt;= 1">source: minimum cardinality of 'source' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
