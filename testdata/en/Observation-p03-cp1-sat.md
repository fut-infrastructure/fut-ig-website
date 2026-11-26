# Oxygen saturation 96% (completed episode) - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Oxygen saturation 96% (completed episode)**

## Example Observation: Oxygen saturation 96% (completed episode)

Profile: [ehealth-observation](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-observation.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-08-04 09:00:00+0000 --> 2025-12-15 12:00:00+0000](EpisodeOfCare-p03-eoc1.md)

> **Resolved timing**
* serviceRequestVersionId: 1
* type: Extra

**identifier**: [eHealthIdentifier](http://ehealth.sundhed.dk/fhir/11.0.5/NamingSystem-ehealth-identifier.html)/${SUBMISSION_UUID}

**basedOn**: [ServiceRequest Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?](ServiceRequest-p03-cp1-sr-extra-saturation.md)

**status**: Final

**code**: Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?

**subject**: [Mette Kristensen (official) Female, DoB: 1958-12-24 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2412589206 (use: official))](Patient-p03.md)

**effective**: 2025-10-23 08:30:00+0000

**performer**: [Mette Kristensen (official) Female, DoB: 1958-12-24 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2412589206 (use: official))](Patient-p03.md)

**value**: 96 % (Details: UCUM code% = '%')

> **referenceRange****high**: 85 % (Details: UCUM code% = '%')**type**: Terapeutiske grænseværdier for RØD alarm

> **referenceRange****low**: 85.0000001 % (Details: UCUM code% = '%')**high**: 88 % (Details: UCUM code% = '%')**type**: Terapeutiske grænseværdier for GUL alarm



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "p03-cp1-sat",
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
      "reference" : "EpisodeOfCare/p03-eoc1"
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
    "reference" : "ServiceRequest/p03-cp1-sr-extra-saturation"
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
    "reference" : "Patient/p03"
  },
  "effectiveDateTime" : "2025-10-23T08:30:00+00:00",
  "performer" : [{
    "reference" : "Patient/p03"
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
