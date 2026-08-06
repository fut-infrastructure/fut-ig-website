<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile ehealth-observation
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Observation</sch:title>
    <sch:rule context="f:Observation">
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare']) &gt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:derivedFrom) &gt;= 1">derivedFrom: minimum cardinality of 'derivedFrom' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Observation/f:component</sch:title>
    <sch:rule context="f:Observation/f:component">
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
