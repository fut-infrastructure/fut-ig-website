<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile ClinicalImpression
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:ClinicalImpression</sch:title>
    <sch:rule context="f:ClinicalImpression">
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-organization']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-organization': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-other']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-other': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-careplan']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-careplan': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare']) &gt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:code) &gt;= 1">code: minimum cardinality of 'code' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:ClinicalImpression/f:note</sch:title>
    <sch:rule context="f:ClinicalImpression/f:note">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:time) &lt;= 1">time: maximum cardinality of 'time' is 1</sch:assert>
      <sch:assert test="count(f:text) &gt;= 1">text: minimum cardinality of 'text' is 1</sch:assert>
      <sch:assert test="count(f:text) &lt;= 1">text: maximum cardinality of 'text' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
