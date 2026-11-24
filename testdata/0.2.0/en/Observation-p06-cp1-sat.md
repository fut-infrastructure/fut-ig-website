# Oxygen saturation 96% (completed episode) - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Oxygen saturation 96% (completed episode)**

## Example Observation: Oxygen saturation 96% (completed episode)

Profile: [ehealth-observation](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-observation.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-11-03 09:00:00+0000 --> 2026-03-16 12:00:00+0000](EpisodeOfCare-p06-eoc1.md)

> **Resolved timing**
* serviceRequestVersionId: 1
* type: Extra

**identifier**: [eHealthIdentifier](http://ehealth.sundhed.dk/fhir/11.0.1/NamingSystem-ehealth-identifier.html)/${SUBMISSION_UUID}

**basedOn**: [ServiceRequest Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?](ServiceRequest-p06-cp1-sr-extra-saturation.md)

**status**: Final

**code**: Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?

**subject**: [Andreas Bonde (official) Male, DoB: 1996-07-12 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1207969563 (use: official))](Patient-p06.md)

**effective**: 2026-01-22 08:30:00+0000

**performer**: [Andreas Bonde (official) Male, DoB: 1996-07-12 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1207969563 (use: official))](Patient-p06.md)

**value**: 96 % (Details: UCUM code% = '%')

> **referenceRange****high**: 85 % (Details: UCUM code% = '%')**type**: Terapeutiske grænseværdier for RØD alarm

> **referenceRange****low**: 85.0000001 % (Details: UCUM code% = '%')**high**: 88 % (Details: UCUM code% = '%')**type**: Terapeutiske grænseværdier for GUL alarm



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "p06-cp1-sat",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p06-eoc1"
    }
  },
  {
    "extension" : [{
      "url" : "serviceRequestVersionId",
      "valueId" : "1"
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/resolved-timing-type",
          "code" : "Extra"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing"
  }],
  "identifier" : [{
    "system" : "http://ehealth.sundhed.dk/id/ehealth-identifier",
    "value" : "${SUBMISSION_UUID}"
  }],
  "basedOn" : [{
    "reference" : "ServiceRequest/p06-cp1-sr-extra-saturation"
  }],
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "urn:oid:1.2.208.176.2.1",
      "code" : "NPU03011",
      "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?"
    }]
  },
  "subject" : {
    "reference" : "Patient/p06"
  },
  "effectiveDateTime" : "2026-01-22T08:30:00+00:00",
  "performer" : [{
    "reference" : "Patient/p06"
  }],
  "valueQuantity" : {
    "value" : 96,
    "unit" : "%",
    "system" : "http://unitsofmeasure.org",
    "code" : "%"
  },
  "referenceRange" : [{
    "high" : {
      "value" : 85,
      "unit" : "%",
      "system" : "http://unitsofmeasure.org",
      "code" : "%"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "RAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU03011"
      }]
    }
  },
  {
    "low" : {
      "value" : 85.0000001,
      "unit" : "%",
      "system" : "http://unitsofmeasure.org",
      "code" : "%"
    },
    "high" : {
      "value" : 88,
      "unit" : "%",
      "system" : "http://unitsofmeasure.org",
      "code" : "%"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "GAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU03011"
      }]
    }
  }]
}

```
