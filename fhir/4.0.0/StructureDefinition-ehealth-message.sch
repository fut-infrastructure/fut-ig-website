<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile Communication
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Communication</sch:title>
    <sch:rule context="f:Communication">
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-thread-id']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-thread-id': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-administrative-status']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-administrative-status': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-administrative-status']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-administrative-status': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-title']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-title': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-priority']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-priority': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-id']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-id': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-on-behalf-of']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-on-behalf-of': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:recipient) &lt;= 1">recipient: maximum cardinality of 'recipient' is 1</sch:assert>
      <sch:assert test="count(f:payload) &lt;= 1">payload: maximum cardinality of 'payload' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:extension</sch:title>
    <sch:rule context="f:Communication/f:extension">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:url) &gt;= 1">url: minimum cardinality of 'url' is 1</sch:assert>
      <sch:assert test="count(f:url) &lt;= 1">url: maximum cardinality of 'url' is 1</sch:assert>
      <sch:assert test="count(f:value[x]) &gt;= 1">value[x]: minimum cardinality of 'value[x]' is 1</sch:assert>
      <sch:assert test="count(f:value[x]) &lt;= 1">value[x]: maximum cardinality of 'value[x]' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:category</sch:title>
    <sch:rule context="f:Communication/f:category">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:text) &lt;= 1">text: maximum cardinality of 'text' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:category/f:coding</sch:title>
    <sch:rule context="f:Communication/f:category/f:coding">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:system) &gt;= 1">system: minimum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:system) &lt;= 1">system: maximum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:version) &lt;= 1">version: maximum cardinality of 'version' is 1</sch:assert>
      <sch:assert test="count(f:code) &lt;= 1">code: maximum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:display) &lt;= 1">display: maximum cardinality of 'display' is 1</sch:assert>
      <sch:assert test="count(f:userSelected) &lt;= 1">userSelected: maximum cardinality of 'userSelected' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:medium</sch:title>
    <sch:rule context="f:Communication/f:medium">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:text) &lt;= 1">text: maximum cardinality of 'text' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:medium/f:coding</sch:title>
    <sch:rule context="f:Communication/f:medium/f:coding">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:system) &gt;= 1">system: minimum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:system) &lt;= 1">system: maximum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:version) &lt;= 1">version: maximum cardinality of 'version' is 1</sch:assert>
      <sch:assert test="count(f:code) &lt;= 1">code: maximum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:display) &lt;= 1">display: maximum cardinality of 'display' is 1</sch:assert>
      <sch:assert test="count(f:userSelected) &lt;= 1">userSelected: maximum cardinality of 'userSelected' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:note</sch:title>
    <sch:rule context="f:Communication/f:note">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:time) &lt;= 1">time: maximum cardinality of 'time' is 1</sch:assert>
      <sch:assert test="count(f:text) &gt;= 1">text: minimum cardinality of 'text' is 1</sch:assert>
      <sch:assert test="count(f:text) &lt;= 1">text: maximum cardinality of 'text' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
