<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile DeviceMetric
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:DeviceMetric</sch:title>
    <sch:rule context="f:DeviceMetric">
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities']) &gt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities']) &gt;= 3">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities': minimum cardinality of 'extension' is 3</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities']) &lt;= 3">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities': maximum cardinality of 'extension' is 3</sch:assert>
      <sch:assert test="count(f:source) &gt;= 1">source: minimum cardinality of 'source' is 1</sch:assert>
      <sch:assert test="count(f:parent) &lt;= 0">parent: maximum cardinality of 'parent' is 0</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:DeviceMetric/f:calibration</sch:title>
    <sch:rule context="f:DeviceMetric/f:calibration">
      <sch:assert test="count(f:extension[@url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-calibrationExpires']) &lt;= 1">extension with URL = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-calibrationExpires': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
